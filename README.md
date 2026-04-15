# MVC Project Basic

Day la bo khung MVC co ban bang PHP + HTML/CSS/JS + XAMPP.

## Cau truc

```text
mvc_php_starter/
│
├── app/
│   ├── controllers/
│   │   └── HomeController.php
│   ├── models/
│   │   └── HomeModel.php
│   └── views/
│       ├── layouts/
│       │   └── main.php
│       └── home/
│           └── index.php
│
├── public/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   ├── .htaccess
│   └── index.php
│
├── core/
│   ├── App.php
│   ├── Controller.php
│   └── Database.php
│
├── config/
│   └── config.php
│
├── .htaccess
└── README.md
```

## Cach chay voi XAMPP

1. Dat thu muc vao `C:\\xampp\\htdocs\\mvc_php_starter`
2. Bat `Apache` va `MySQL`
3. Mo:
   - `http://localhost/mvc_php_starter/public/`
4. URL test:
   - `http://localhost/mvc_php_starter/public/home/index`
   - `http://localhost/mvc_php_starter/public/index.php?url=home/index`

## Ghi chu

- Sua `config/config.php` neu ban doi ten folder.
- Neu muon dung database, cap nhat thong tin DB trong `config/config.php`.
- `Database.php` da san sang de ban mo rong cho CRUD sau nay.
