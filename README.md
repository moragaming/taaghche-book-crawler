# Taaghche Book Crawler 📚

![GitHub release](https://img.shields.io/github/release/moragaming/taaghche-book-crawler.svg)

Welcome to the **Taaghche Book Crawler**! This repository contains a simple PHP-based web crawler designed to collect structured metadata from Taaghche’s digital bookstore. It focuses on gathering information about books from a specified publisher, handling pagination automatically. The output is a comprehensive JSON file that can be used for data analysis, archival purposes, or integration with other systems.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Data Structure](#data-structure)
- [Contributing](#contributing)
- [License](#license)
- [Support](#support)

## Features ✨

- **Easy to Use**: The crawler is straightforward to set up and run, even for those with minimal coding experience.
- **Pagination Handling**: Automatically navigates through pages to gather all relevant book data.
- **Structured Data Output**: Exports book details in JSON format for easy integration with other tools.
- **Publisher Specific**: Focuses on books from a specified publisher, making it efficient for targeted data collection.
- **Lightweight**: Built with PHP, it requires minimal resources to run.

## Installation ⚙️

To get started with the Taaghche Book Crawler, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/moragaming/taaghche-book-crawler.git
   cd taaghche-book-crawler
   ```

2. **Install Dependencies**:
   Make sure you have PHP installed on your machine. If you need to install any dependencies, use Composer:
   ```bash
   composer install
   ```

3. **Configuration**:
   Open the configuration file and set your desired publisher. You can find the configuration file in the `config` directory.

4. **Run the Crawler**:
   Execute the crawler using the command line:
   ```bash
   php crawler.php
   ```

## Usage 📖

Once you have set up the crawler, you can run it to collect book data. Here’s how to use it effectively:

1. **Set Publisher**: In the configuration file, specify the publisher whose books you want to crawl.

2. **Start Crawling**: Run the crawler. It will navigate through the pages and collect the book metadata.

3. **Output JSON**: After the crawling process is complete, you will find a JSON file in the output directory. This file contains all the structured metadata you need.

4. **Analyze or Integrate**: You can now use this JSON file for data analysis, archival, or integrate it with other systems.

For more details, you can check the [Releases section](https://github.com/moragaming/taaghche-book-crawler/releases) to download the latest version.

## Data Structure 🗂️

The JSON output will include the following fields for each book:

- **Title**: The title of the book.
- **Author(s)**: The author or authors of the book.
- **Publisher**: The publisher of the book.
- **Publication Date**: When the book was published.
- **ISBN**: The International Standard Book Number.
- **Price**: The price of the book.
- **Description**: A brief description of the book.
- **Cover Image**: URL to the book cover image.

This structured format makes it easy to parse and utilize the data in various applications.

## Contributing 🤝

We welcome contributions to the Taaghche Book Crawler! If you would like to help improve the project, please follow these steps:

1. **Fork the Repository**: Click on the "Fork" button at the top right of the page.
2. **Create a New Branch**: Use a descriptive name for your branch.
   ```bash
   git checkout -b feature/YourFeatureName
   ```
3. **Make Changes**: Implement your changes and commit them.
   ```bash
   git commit -m "Add a new feature"
   ```
4. **Push to Your Fork**:
   ```bash
   git push origin feature/YourFeatureName
   ```
5. **Open a Pull Request**: Go to the original repository and click on "New Pull Request".

We appreciate all contributions, whether they are bug fixes, new features, or improvements to documentation.

## License 📜

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Support 🆘

If you encounter any issues or have questions about using the Taaghche Book Crawler, feel free to open an issue in the repository. You can also check the [Releases section](https://github.com/moragaming/taaghche-book-crawler/releases) for updates and downloads.

## Additional Resources 🌐

- **PHP Documentation**: [PHP.net](https://www.php.net/docs.php)
- **JSON Format**: [JSON.org](https://www.json.org/json-en.html)
- **Web Crawling Basics**: [Web Scraping Guide](https://www.webscraping.com/)

Thank you for checking out the Taaghche Book Crawler! Happy crawling!