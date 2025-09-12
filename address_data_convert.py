# Ensure both Pandas and SQLAlchemy are installed
# Install mysql.connector (pip install mysql-connector-python)
# import pandas as pd
# import sqlalchemy as al
# import mysql.connector as sqlconn

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

    # IMPORTANT - This variable determines how many segments this will output
    parts_count = 3
    rows_per_file = get_rows_per_file(parts_count, cursor)

    cursor.execute("SELECT * FROM addresses")   

    column_names = [name[0] for name in cursor.description]

    part = 1
    rows_total = 0
    file_count = 0
    writer = None
    f = None
    # Stopped temporarily here - issues with sqlite file


def main():
    filepath = get_sqlite_path()
    print(filepath)
    sqlite_convert(filepath)

if __name__ == "__main__":
    main()