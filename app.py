import os #Работа с файлами и папками
from flask import Flask, render_template, url_for
from pathlib import Path #существует ли файл на компьютере

app = Flask(__name__)

FLASK_LABS_DIR = Path(app.static_folder) / "labs"
XAMPP_LABS_DIR = Path(r"C:\xampp\htdocs\php_labs")
XAMPP_URL = "http://localhost/php_labs"

@app.route("/")
def index():
    title = "Лабораторные работы"

    labhtml = [
        {
            "title" : "Лабораторная №1",
            "description" : "Титульная страница",
            "file" : "web1_.html"
        },
        {
            "title" : "Лабораторная №2",
            "description" : "Список предметов и факультетов",
            "file" : "web2_.html"
        },
        {
            "title" : "Лабораторная №3",
            "description" : "Таблица расписания поездов",
            "file" : "web3_.html"
        },
        {
            "title" : "Лабораторная №4",
            "description" : "Мозаика",
            "file" : "web4_.html"
        },
        {
            "title" : "Лабораторная №5",
            "description" : "Расписание занятий",
            "file" : "web5_.html"
        },
        {
            "title" : "Лабораторная №6",
            "description" : "Глобус",
            "file" : "web6_.html"
        },
        {
            "title" : "Лабораторная №7",
            "description" : "История",
            "file" : "web7_.html"
        },
        {
            "title" : "Лабораторная №8",
            "description" : "Выбор элемента",
            "file" : "web8_.html"
        },
    ]

    lab5 = [
        {
            "title" : "Лабораторная №5.1",
            "description" : "Вывод текста и изменение цвета шрифта",
            "file" : "lab_5_1.php"
        },
        {
            "title" : "Лабораторная №5.2",
            "description" : "Использование переменных и вывод их на экран",
            "file" : "lab_5_2.php"
        },
        {
            "title" : "Лабораторная №5.3",
            "description" : "Использование ссылок на переменные",
            "file" : "lab_5_3.php"
        },
        {
            "title" : "Лабораторная №5.4",
            "description" : "Типы переменных",
            "file" : "lab_5_4.php"
        },
        {
            "title" : "Лабораторная №5.5",
            "description" : "Условия if / elseif",
            "file" : "lab_5_5.php"
        },
        {
            "title" : "Лабораторная №5.6",
            "description" : "Оператор switch",
            "file" : "lab_5_6.php"
        },
        {
            "title" : "Лабораторная №5.7",
            "description" : "Switch и сообщения на разных языках",
            "file" : "lab_5_7.php"
        },
    ]

    lab6 = [
        {
            "title" : "Лабораторная №6.1",
            "description" : "Циклы for и таблица умножения",
            "file" : "lab_6_1.php"
        },
        {
            "title" : "Лабораторная №6.2",
            "description" : "Циклы for и таблица сложения",
            "file" : "lab_6_2.php"
        },
        {
            "title" : "Лабораторная №6.3",
            "description" : "Функции для вывода текста",
            "file" : "lab_6_3.php"
        },
        {
            "title" : "Лабораторная №6.4",
            "description" : "Массивы, цвет и размер текста",
            "file" : "lab_6_4.php"
        },
    ]

    lab7 = [
        {
            "title" : "Лабораторная №7.1",
            "description" : "Массивы, foreach, сортировка",
            "file" : "lab_7_1.php"
        },
        {
            "title" : "Лабораторная №7.5",
            "description" : "Ассоциативные массивы",
            "file" : "lab_7_5.php"
        },

    ]

    sections = [
        {
            "heading": "Лабораторные работы по HTML",
            "labs": labhtml,
            "type": "html"
        },
        {
            "heading": "Лабораторные работы по PHP №5",
            "labs": lab5,
            "type": "php"
        },
        {
            "heading": "Лабораторные работы по PHP №6",
            "labs": lab6,
            "type": "php"
        },
        {
            "heading": "Лабораторные работы по PHP №7",
            "labs": lab7,
            "type": "php"
        },
    ]

    for section in sections:
        for lab in section["labs"]:
            if section["type"] == "html":
                file_path = FLASK_LABS_DIR / lab["file"]
                lab["exists"] = file_path.exists()
                lab["url"] = url_for("static", filename=f"labs/{lab['file']}")
            else:
                file_path = XAMPP_LABS_DIR / lab["file"]
                lab["exists"] = file_path.exists()
                lab["url"] = f"{XAMPP_URL}/{lab['file']}"

    return render_template("index.html", title=title, sections=sections)

if __name__ == "__main__":
    app.run(debug=True)
