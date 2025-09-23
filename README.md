ISTE-498 Alt-Coop

Ad-Hoc Team 2

Meeting Times:
Monday 1-2PM
Wednesday 3-4PM
Friday 1-2PM

## Schema

This repository now includes `addresses.sql`, which defines the MySQL schema for the `addresses` table.  

The schema includes:
- Core address fields: zipcode, number, street, street2, city, state, country
- Optional details: plus4, latitude, longitude, source
- A unique constraint to prevent duplicate addresses
- Indexes optimized for common queries (zipcode + number, state + city, latitude + longitude, etc.)

To load the schema into MySQL:

```bash
mysql -u <user> -p < addresses.sql
```

## CSV to MySQL Import Script

**A simple Python script to import a CSV file into an existing MySQL table.**

This script does **not** create or drop tables—it only inserts data. It handles `NaN` values and processes rows in batches to avoid memory issues.

---

### Features

- Insert CSV data into an **existing MySQL table**  
- Handles `NaN` / `'nan'` values automatically  
- Inserts rows in batches to improve performance  
- Shows progress of insertion for large CSVs  

---

### Requirements

- Python 3.7+  
- MySQL server running locally or remotely  
- Python packages:

```bash
pip install pandas mysql-connector-python
```

### Usage
1. Open a terminal or command prompt.
2. Navigate to the folder containing csv_to_mysql.py.
3. Run the script:
```python
python csv_to_mysql.py
```
4. You will be prompted for the following:
  - MySQL username: Your database username (e.g., root)
  - MySQL password: Your database password
  - MySQL database name: The database to insert data into
  - MySQL table name: The table to insert data into (must already exist)
  - CSV file path: Full path to the CSV file

## Senior Development Self-Assessment Web Form

This repository also includes a self-assessment web form built with HTML/PHP to gather technical, leadership, and soft skills data from students in the Senior Development Course.

## Features
- Collects personal information: Preferred name, email, major, section #, and date
- Language proficiency in: HTML, CSS, Python, JavaScript, Java, etc.
- Software proficiency in: Git, Docker, Jira, Azure, etc.
- Front, Back-End, GUI, UX/UI development skills assessment
- Personality, soft skills, and leadership questions

## Requirements
- PHP or HTML
- Adminer (user='iste498t01' | password='Gras4@overlap')
- PHP Server (VS Code Extension)
- Live Server (VS Code Extension)
