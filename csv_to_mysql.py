# csv_to_mysql.py
# Simple script to import a CSV file into a MySQL table.
# Requires: pip install pandas mysql-connector-python

import mysql.connector
import pandas as pd

def insert_csv_to_mysql(user, password, database, table_name, file_path, batch_size=1000):

    # Connect to MySQL
    conn = mysql.connector.connect(
        host="localhost",
        user=user,
        password=password,
        database=database
    )
    cursor = conn.cursor()

    # Check if table exists
    cursor.execute("SHOW TABLES LIKE %s", (table_name,))
    if not cursor.fetchone():
        print(f"Error: Table '{table_name}' does not exist in database '{database}'.")
        cursor.close()
        conn.close()
        return

    # Load CSV
    df = pd.read_csv(file_path)

    # Drop unnamed index column if exists
    df = df.loc[:, ~df.columns.str.contains("^Unnamed")]

    # Replace any NaN, pd.NA, or string 'nan'/'NaN' with None
    df = df.apply(lambda col: col.map(lambda x: None if pd.isna(x) or str(x).lower() == "nan" else x))

    # Prepare rows for insertion
    rows = [tuple(row) for row in df.to_numpy()]

    # Build insert query
    cols = ", ".join([f"`{col.strip()}`" for col in df.columns])
    placeholders = ", ".join(["%s"] * len(df.columns))
    insert_query = f"INSERT INTO `{table_name}` ({cols}) VALUES ({placeholders})"

    # Insert in batches
    for i in range(0, len(rows), batch_size):
        batch = rows[i:i + batch_size]
        cursor.executemany(insert_query, batch)
        conn.commit()
        print(f"Inserted {i + len(batch)} / {len(rows)} rows...")

    print(f"Finished inserting {len(rows)} rows into `{database}.{table_name}`.")

    cursor.close()
    conn.close()


def run_import():
    # Prompt user for database info
    user = input("Enter MySQL username: ")
    password = input("Enter MySQL password: ")
    database = input("Enter MySQL database name: ")
    table_name = input("Enter MySQL table name: ")
    file_path = input("Enter path to CSV file: ")

    insert_csv_to_mysql(user, password, database, table_name, file_path)


def main():
    run_import()


if __name__ == "__main__":
    main()
