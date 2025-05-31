# 📚 Taaghche Book Crawler

This is a simple PHP-based crawler for fetching all books from [Taaghche](https://taaghche.com) by a specific publisher. The result is saved as a JSON file (`taaghche_books.json`) for further analysis or processing.

## 🚀 Features

- Crawls all books from **Taaghche** with a specific publisher filter.
- Handles pagination using the `nextOffset` value.
- Outputs a full list of books to a local JSON file.
- Includes metadata like title, author, rating, price, and cover image URL.

## 🔧 Usage

1. Clone this repository:

   ```bash
   git clone https://github.com/BaseMax/taaghche-book-crawler.git
   cd taaghche-book-crawler
   ```

2. Run the PHP script:

   ```bash
   php taaghche.com.php
   ```

The result will be saved to:

```
taaghche_books.json
```

> 💡 The default publisher ID is 645 (انتشارات). You can modify the filters parameter in the script to target other publishers or criteria.

## 📁 Output Format

Each book in taaghche_books.json includes fields such as:

- id
- title
- authors
- price
- publisher
- rating
- coverUri
- publishDate
- And much more depending on what Taaghche provides in the API response.

## 📄 License

MIT License

© 2025 Max Base
