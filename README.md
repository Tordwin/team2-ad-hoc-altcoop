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

This script imports rows from a CSV file into a MySQL database table.

## Requirements
- Python 3
- [pandas](https://pandas.pydata.org/)  
- [mysql-connector-python](https://pypi.org/project/mysql-connector-python/)

Install dependencies:
```bash
pip install pandas mysql-connector-python
```
### Usage

Run the script with the CSV file you want to import:
```python
python csv_to_mysql.py addresses_part1.csv
python csv_to_mysql.py addresses_part2.csv
python csv_to_mysql.py addresses_part3.csv
```

If successful, you’ll see how many rows were inserted.

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
- Adminer (Not Implemented Yet)
- PHP Server (VS Code Extension)
- Live Server (VS Code Extension)
