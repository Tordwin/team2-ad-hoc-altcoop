# Ensure both Pandas and SQLAlchemy are installed
# Install mysql.connector (pip install mysql-connector-python)
# import pandas as pd
# import sqlalchemy as al
# import mysql.connector as sqlconn

import csv
import sqlite3

def get_sqlite_path():
    filepath = input("Enter the absolute path to your SQLite file: ")

    return filepath

def sqlite_convert(filepath):
    conn = sqlite3.connect(filepath)
    cursor = conn.cursor()
    #cont. here later

def main():
    print(get_sqlite_path())

if __name__ == "__main__":
    main()