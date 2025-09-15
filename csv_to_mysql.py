# csv_to_mysql.py
# Simple script to import a CSV file into a MySQL table.
# Requires: pip install pandas mysql-connector-python

import pandas as pd
import mysql.connector
import sys

def main():
    if len(sys.argv) < 2:
        print("Usage: python csv_to_mysql.py <csv_file>")
        sys.exit(1)

    csv_file = sys.argv[1]

    # USetup
    host = "localhost"
    user = "root"
    password = "student"
    database = "addresses"
    table = "addresses"

    # Connect to MySQL
    conn = mysql.connector.connect(
        host=host,
        user=user,
        password=password,
        database=database
    )
    cursor = conn.cursor()

    # Read CSV into DataFrame
    df = pd.read_csv(csv_file)

    # Build INSERT statement
    cols = ", ".join(df.columns)
    placeholders = ", ".join(["%s"] * len(df.columns))
    insert_query = f"INSERT INTO {table} ({cols}) VALUES ({placeholders})"

    # Insert rows
    for _, row in df.iterrows():
        cursor.execute(insert_query, tuple(row))

    conn.commit()
    print(f"Inserted {len(df)} rows from {csv_file} into {table}")

    cursor.close()
    conn.close()

if __name__ == "__main__":
    main()
