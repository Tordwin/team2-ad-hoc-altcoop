#include "Arduino_LED_Matrix.h"

ArduinoLEDMatrix matrix;  // This makes an instance of the matrix object for the faces and programs and whatnot

const int airVal = 500; // Placeholder
const int waterVal = 260; //Placeholder

int interval = (airVal - waterVal)/3;
int soilMoistVal = 0; // Initializer value
void setup() {
  matrix.begin();  // Starts the matrix
  Serial.begin(9600);
}

void loop() {
  soilMoistVal = analogRead(A0);
  if (soilMoistVal > waterVal && soilMoistVal < (waterVal + interval)){
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
  else if (soilMoistVal > (waterVal + interval) && soilMoistVal < (airVal - interval)){
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
  else if (soilMoistVal < airVal && soilMoistVal > (airVal - interval)){
    Serial.println("Dry");
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
  delay(1000); // Adjust if needed for how often readings are desired
}
  // uint8_t smiley[8][12] = {
  //   {0,0,1,1,0,0,0,0,1,1,0,0},
  //   {0,1,0,0,1,0,0,1,0,0,1,0},
  //   {0,1,0,0,1,0,0,1,0,0,1,0},
  //   {0,0,1,1,0,0,0,0,1,1,0,0},
  //   {0,0,0,0,0,0,0,0,0,0,0,0},
  //   {0,1,0,0,0,0,0,0,0,0,1,0},
  //   {0,0,1,0,0,0,0,0,0,1,0,0},
  //   {0,0,0,1,1,1,1,1,1,0,0,0}
  // };

  // matrix.renderBitmap(smiley, 8, 12);
  // delay(2000);

  // uint8_t blink[8][12] = {
  //   {0,0,0,0,0,0,0,0,0,0,0,0},
  //   {0,0,0,0,0,0,0,0,0,0,0,0},
  //   {0,1,0,0,1,0,0,1,0,0,1,0},
  //   {0,0,1,1,0,0,0,0,1,1,0,0},
  //   {0,0,0,0,0,0,0,0,0,0,0,0},
  //   {0,1,0,0,0,0,0,0,0,0,1,0},
  //   {0,0,1,0,0,0,0,0,0,1,0,0},
  //   {0,0,0,1,1,1,1,1,1,0,0,0}
  // };

  // matrix.renderBitmap(blink, 8, 12);
  // delay(200);
  // Serial.println(analogRead(A0));



