# MailTracker

**A PHP-Based Mail Management, Correspondence Tracking, and Administrative Management System**

MailTracker is a web-based application developed to support the registration, management, monitoring, and tracking of organisational correspondence. It provides a centralised platform for managing mail records, monitoring mail movement, maintaining organisational information, and improving visibility into correspondence workflows.

The system is designed to support administrative personnel and organisational users in handling incoming and outgoing correspondence, monitoring mail transit activities, maintaining staff and office records, and retrieving mail-related information through structured search and reporting facilities.

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#key-features)
- [System Modules](#system-modules)
- [Technology Stack](#technology-stack)
- [Project Structure](#project-structure)
- [System Requirements](#system-requirements)
- [Installation and Setup](#installation-and-setup)
- [Database Configuration](#database-configuration)
- [Running the Application](#running-the-application)
- [Security Considerations](#security-considerations)
- [Potential Applications](#potential-applications)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [License](#license)
- [Author](#author)

---

## Overview

Organisations process different categories of correspondence daily, including official letters, internal communications, administrative documents, and other records requiring registration, distribution, and follow-up.

Managing these activities manually can make it difficult to maintain accurate records, monitor correspondence movement, retrieve historical information, and establish accountability.

MailTracker addresses these challenges by providing a centralised digital environment for managing mail-related operations.

The application brings together correspondence records, mail tracking, transit information, staff management, office administration, and reporting functionality. Its administrative capabilities also support user management, access rights, and operational oversight.

The overall objective is to improve correspondence management, record accessibility, administrative efficiency, and traceability.

## Key Features

### 1. Mail Registration and Management
- Register and maintain correspondence records.
- Manage mail-related information and associated content.
- View, edit, search, and retrieve mail records.
- Maintain structured records for correspondence management.

### 2. Mail Tracking
- Monitor registered mail records.
- Access mail tracking information.
- Search and retrieve tracking records.
- Maintain visibility into correspondence movement.

### 3. Mail Transit Management
- Record and manage mail transit activities.
- Maintain transit-related correspondence information.
- Monitor mail movement across organisational offices.
- Support the retrieval of transit records.

### 4. Staff Management
- Maintain staff information.
- Add, edit, view, and search staff records.
- Support administrative management of organisational personnel.

### 5. Office Management
- Maintain organisational office records.
- Manage office information.
- Support office-related correspondence administration.

### 6. Rank Management
- Maintain organisational rank information.
- Manage rank records used in the organisational administration structure.

### 7. User and Access Management
- Manage application users.
- Support user administration and access-right management.
- Provide administrative interfaces for managing user accounts and permissions.

### 8. Search and Information Retrieval
- Search and filter application records.
- Retrieve mail, staff, office, and administrative information.
- Support record browsing and detailed information views.

### 9. Reporting and Export
- Generate printable records and reports.
- Support PDF-related document generation.
- Provide spreadsheet and data export functionality through the application's supporting libraries.

### 10. Administrative Dashboard and Utilities
- Provide administrative management interfaces.
- Support notifications and application utilities.
- Include supporting functionality for data processing and document handling.

---

## System Modules

The application is organised around several functional areas:

| Module | Purpose |
|---|---|
| Mail Contents | Management of correspondence content and records |
| Mail Tracking | Monitoring and retrieval of mail tracking information |
| Mail Transit | Management of mail movement and transit records |
| Staff Management | Maintenance of staff information |
| Office Management | Administration of organisational offices |
| Rank Management | Maintenance of organisational rank records |
| User Management | Administration of application accounts |
| Access Rights | Management of user permissions |
| Reporting | Printing, exporting, and retrieving application records |

---

## Technology Stack

MailTracker is implemented primarily using PHP and supporting web technologies.

| Technology / Component | Purpose |
|---|---|
| PHP | Server-side application development |
| MySQL / MySQL-compatible database | Relational data storage |
| HTML | Application structure |
| CSS | Interface styling and presentation |
| JavaScript | Client-side interactions |
| jQuery | Client-side interface utilities |
| Bootstrap | Responsive interface components |
| PHPMailer | Email-related functionality |
| PHPExcel | Spreadsheet processing and export |
| PDFMake | PDF document generation |
| Apache | Web server environment |

The application also includes supporting libraries for authentication integrations, file handling, data processing, reporting, and interface components.

---

## Project Structure

The repository is organised into functional directories and application components.

```text
MailTracker/
│
├── classes/                  # Core application classes
│   ├── controls/             # Form and field controls
│   ├── datasource/           # Data access components
│   ├── filesystem/           # File storage integrations
│   └── security/             # Security and authentication components
│
├── connections/              # Database connection libraries
│   ├── dbfunctions/          # Database-specific functions
│   └── dbinfo/               # Database information classes
│
├── files/                    # Local application file storage
│
├── fonts/                    # Application fonts
│
├── images/                   # Images and interface assets
│
├── include/                  # Application configuration and utilities
│   ├── dal/                  # Data access layer
│   ├── pages/                # Page-related application components
│   ├── bootstrap/            # Bootstrap resources
│   ├── jquery-ui/            # jQuery UI resources
│   └── pdfmake/              # PDF generation resources
│
├── libs/                     # Supporting PHP libraries
│
├── pdf/                      # PDF configuration and resources
│
├── plugins/                  # Third-party plugins
│
├── styles/                   # Stylesheets and interface themes
│
├── templates/                # Application page templates
│
├── templates_c/              # Template cache directory
│
├── login.php                 # Application login
├── index.htm                 # Application entry page
├── menu.php                  # Application navigation
├── notifications.php         # Notification functionality
│
├── track_mails_list.php      # Mail tracking interface
├── trackmails_list.php       # Mail tracking records
├── transitmail_list.php      # Mail transit management
├── staffs_list.php           # Staff management
├── offices_list.php          # Office management
├── ranks_list.php            # Rank management
│
└── .gitignore                # Git exclusion rules
```

*Note: This is a representative overview of the repository structure.*

---

## System Requirements

The following environment is recommended for running the application:

- Windows, Linux, or another compatible operating system.
- Apache web server.
- PHP with the extensions required by the application and its supporting libraries.
- MySQL or a compatible relational database.
- A modern web browser.
- XAMPP, WAMP, or an equivalent local development environment.

For local development, XAMPP provides a convenient environment containing Apache, PHP, and MariaDB.

---

## Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/julaskky/MailTracker.git
```

Navigate into the project directory:

```bash
cd MailTracker
```

### 2. Set Up the Web Server

For XAMPP on Windows, copy or clone the project into the Apache document root:

```text
C:\xampp\htdocs\MailTracker
```

If using a different installation directory, adjust the path accordingly.

### 3. Start the Required Services

Open the XAMPP Control Panel and start:

- Apache
- MySQL

Ensure that both services are running successfully.

### 4. Create the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create a database for the application.

For example:

```sql
CREATE DATABASE mailtracker;
```

Import the corresponding database schema and initial data if a database export is available.

**Important:** The application requires its database tables and supporting records to be configured before normal operation. A database export is not assumed to be included in this repository.

### 5. Configure Database Connectivity

Review the application's database configuration and connection-related files, including the relevant configuration under:

```text
include/
connections/
```

Update the database host, database name, username, password, and other connection parameters to match your environment.

Do not commit production database credentials or private configuration files to GitHub.

### 6. Verify Application Dependencies

Ensure that the PHP extensions and supporting libraries required by the application are available.

The repository includes several supporting libraries, so inspect the application configuration for any additional environment-specific requirements.

---

## Running the Application

After configuring Apache, PHP, and the database, open the application in your browser:

```text
http://localhost/MailTracker/
```

The login page should be accessible through the application's configured entry point.

Sign in using a valid application account configured in the database.

---

## Security Considerations

Security is important when handling organisational correspondence and administrative information.

For deployment and maintenance:

- Use strong passwords for application and database accounts.
- Restrict administrative functionality to authorised users.
- Configure appropriate access permissions.
- Use HTTPS in production environments.
- Protect database credentials and other sensitive configuration values.
- Validate and sanitise user-submitted information.
- Apply appropriate restrictions to uploaded documents.
- Keep PHP and supporting libraries updated.
- Avoid exposing application error messages and sensitive server information in production.
- Back up application data and database records regularly.
- Ensure that uploaded correspondence and personal documents are not exposed through public directories.

**Repository privacy:** Personal documents, private uploads, database credentials, and other sensitive operational files should remain outside version control.

---

## Potential Applications

MailTracker can be adapted to support correspondence administration in:

- Government institutions and public-sector organisations.
- Universities and other educational institutions.
- Corporate administrative departments.
- Registry and records management offices.
- Organisations handling high volumes of official correspondence.
- Administrative units responsible for internal and external mail distribution.

---

## Future Enhancements

The following enhancements represent potential directions for extending the platform:

1. **Advanced Tracking:** More detailed tracking histories and correspondence movement timelines.
2. **Automated Notifications:** Email and other notifications for important mail status changes.
3. **Dashboard Analytics:** Visual summaries of correspondence volumes, transit activities, and processing performance.
4. **Document Management:** Improved attachment handling, document previews, and secure storage.
5. **Audit Trails:** Detailed activity logs for administrative accountability.
6. **Workflow Automation:** Configurable routing and approval processes.
7. **API Integration:** RESTful interfaces for integration with other organisational information systems.
8. **Enhanced Reporting:** Customisable reports and operational performance indicators.
9. **Mobile Accessibility:** Improved usability across mobile devices and tablets.
10. **Deployment Improvements:** Environment-based configuration and streamlined deployment procedures.

---

## Contributing

Contributions, suggestions, and improvements are welcome.

To contribute:

1. Fork the repository.
2. Create a feature branch.
3. Implement your changes.
4. Test the functionality.
5. Commit your changes with descriptive messages.
6. Submit a pull request describing the proposed improvements.

For substantial changes, consider opening an issue first to discuss the proposed implementation.

---

## License

No specific open-source license is currently declared for this repository.

Unless a license is added, all rights remain with the respective copyright holders. Please contact the repository owner before redistributing or reusing the project beyond applicable legal permissions.

---

## Author

**Dr. Julius Olaniyan, PhD**

Lecturer | Computer Scientist | AI and Machine Learning Researcher

GitHub: [@julaskky](https://github.com/julaskky)

Project Repository: [MailTracker](https://github.com/julaskky/MailTracker)

---

## Acknowledgements

MailTracker incorporates supporting open-source libraries and web technologies that facilitate database connectivity, document generation, interface development, data processing, and application functionality.

Acknowledgement and licensing requirements for third-party components remain subject to their respective licenses.

---

**MailTracker — Improving correspondence management through centralised digital tracking and administration.**
