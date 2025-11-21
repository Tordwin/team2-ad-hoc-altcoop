#include "Arduino_LED_Matrix.h"
#include <WiFiS3.h>

// Wifi connection details start
const char* ssid = "wifiname"; // Replace this with whatever your wifi name is
const char* password = "wifipassword"; // Likewise for your network password
// Wifi connection details end

ArduinoLEDMatrix matrix;  // Starts any matrices in use

const int airVal = 550;    // Air reading
const int waterVal = 280;  // Water reading (both for control)

int interval = (airVal - waterVal) / 3;
int soilMoistVal = 0;

void setup() {
  matrix.begin();
  Serial.begin(115200);
  // Wifi setup - Commented out because of some connectivity troubles

  // while (!Serial);

  // Serial.print("Trying to connect to: ");
  // Serial.println(ssid);

  // WiFi.begin(ssid, password);

  // while (WiFi.status() != WL_CONNECTED) {
  //   delay(500);
  //   Serial.print(".");
  // }

  // Serial.println("\nConnected!");
  // Serial.print("IP Address: ");
  // Serial.println(WiFi.localIP());
}

void loop() {
  soilMoistVal = analogRead(A0);
  Serial.print("Raw: ");
  Serial.println(soilMoistVal);

  // Calculate bounds here for later 
  int lowerBound = waterVal + interval;    // top of "Very Wet" zone
  int upperBound = airVal - interval;      // top of "Wet" zone, bottom of "Dry" zone

  // Calibration case
  if (soilMoistVal <= waterVal) {
    Serial.println("Too wet!! (in water?)");
    // Output goes below - will route this to ideally an LED strip rather than the matrix in the future
    uint8_t indifferent[8][12] = {
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,1,1,1,1,1,1,0,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0}
    };
    matrix.renderBitmap(indifferent, 8, 12);
  }
  else if (soilMoistVal <= lowerBound) {
    // waterVal < soil <= lowerBound  -> Very Wet
    Serial.println("Very Wet!");
    uint8_t indifferent[8][12] = {
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,1,1,1,1,1,1,0,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0}
    };
    matrix.renderBitmap(indifferent, 8, 12);
  }
  else if (soilMoistVal <= upperBound) {
    // lowerBound < soil <= upperBound -> Wet
    Serial.println("Wet!");
    uint8_t smiley[8][12] = {
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,1,0,0,0,0,0,0,0,0,1,0},
      {0,0,1,0,0,0,0,0,0,1,0,0},
      {0,0,0,1,1,1,1,1,1,0,0,0}
    };
    matrix.renderBitmap(smiley, 8, 12);
  }
  else if (soilMoistVal < airVal) {
    // upperBound < soil < airVal -> Dry
    Serial.println("Dry!");
    uint8_t frowny[8][12] = {
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,1,1,1,1,1,1,0,0,0},
      {0,0,1,0,0,0,0,0,0,1,0,0},
      {0,1,0,0,0,0,0,0,0,0,1,0}
    };
    matrix.renderBitmap(frowny, 8, 12);
  }
  else {
    // Calibration case
    Serial.println("Too dry! (out of water?)");
    uint8_t frowny[8][12] = {
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,1,0,0,1,0,0,1,0,0,1,0},
      {0,0,1,1,0,0,0,0,1,1,0,0},
      {0,0,0,0,0,0,0,0,0,0,0,0},
      {0,0,0,1,1,1,1,1,1,0,0,0},
      {0,0,1,0,0,0,0,0,0,1,0,0},
      {0,1,0,0,0,0,0,0,0,0,1,0}
    };
    matrix.renderBitmap(frowny, 8, 12);
  }

  delay(1000);
}


