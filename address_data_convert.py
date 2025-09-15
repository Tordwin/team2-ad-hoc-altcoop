# Install mysql.connector (pip install mysql-connector-python)
# import csv, sqlite3, and math
# (math is just to divide the biggest file into an even-ish # of parts)

import csv
import sqlite3
import math

def get_sqlite_path():
    filepath = input("Enter the absolute path to your SQLite file: ")
    return filepath

    # This is gonna determine 1/3 of the original file, so that it can split the data more easily
def get_rows_per_file(parts_count, cursor):
    cursor.execute("SELECT COUNT(*) FROM addresses")
    rows_count = cursor.fetchone()[0]
    rows_per_file = math.ceil(rows_count/parts_count)
    return rows_per_file

    # This function will split the larger database file and split it into (tentatively) 3 smaller csv files.
def sqlite_convert(filepath):
    conn = sqlite3.connect(filepath)
    cursor = conn.cursor()

    # IMPORTANT: This variable determines how many segments this will output
    parts_count = 3
    rows_per_file = get_rows_per_file(parts_count, cursor)

    cursor.execute("SELECT * FROM addresses")   

    column_names = [name[0] for name in cursor.description]

    part = 1
    rows_total = 0
    writer = None
    f = None
    
    while True:
        rows = cursor.fetchmany(100000)  # IMPORTANT: This value is the batch size for fetching rows; change if needed
        if not rows:
            break

        for row in rows:
            # Opens a new file if needed
            if rows_total == 0:
                if f:  # Closes the old file if writing to a new one
                    f.close()
                filename = f"addresses_part{part}.csv"
                f = open(filename, "w", newline="", encoding="utf-8")
                writer = csv.writer(f)
                writer.writerow(column_names) 
                print(f"Writing {filename}...")

            writer.writerow(row)
            rows_total += 1

            # This little if statement here checks if it's time to switch to a new file
            # (i.e. if the rows_total is larger than the intended row count per file)
            if rows_total >= rows_per_file and part < parts_count:
                rows_total = 0
                part += 1

    # Closes the last file
    if f:
        f.close()

    conn.close()
    print("Done converting to .csv!")


def main():
    filepath = get_sqlite_path()
    print(filepath)
    sqlite_convert(filepath)

if __name__ == "__main__":
    main()