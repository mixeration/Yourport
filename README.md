<h1 align="center">YourPort</h1>
<p align="center">"Your website, your settings, your rules"</p>
<br>

### What is Yourport ?
Yourport is a simple and high configurable portfilo website, its full free to use.
The first feature is a user friendly, you dont need to know any code languages to use yourport.
Only thing that you need is some path editors for change username & age parts...

---

🍁: Get more information [about me](https://mertgokhan.me)<br>
🪐: Get contact on [Google Mail](mixeration@gmail.com)<br>
🌌: Get more support on [Discord](https://discord.gg/SndCjECD9N)<br>
🧬: See my other [projects](https://github.com/mixeration?tab=repositories)

---

### Update tree
> [0.0.1] First release, added settings.php
> 
> [0.0.2] Added background color changer, can configurable duration and delay times
> 
> [0.0.3] Added Hello page and new settings values
> 
> [0.0.4] Added new settings values, boostrap icons

### Features

````

    High configurable
    
    Editable
    
    Open source

    Still in development

    User friendly

    No need development & software infos 

    Code languages that Yourport used: PHP, HTML, CSS
    
````

### Developers

    @mixeration (Hacı Mert Gökhan) : Author, Tester, Developer

### Settings.php

```php
<?php

    function upperMenuName(): string
    {
        return "YourPort";
    }

    function list_value1(): string
    {
        return "Contact";
    }

    function list_value2(): string
    {
        return "About me";
    }

    function list_value3(): string
    {
        return "Github";
    }

    /*
    * Enter your nickname or real name.
    */

    function title(): string
    {
        return "Mixeration";
    }

    /*
    * Enter your real name.
    */

    function name(): string
    {
        return "Hacı Mert Gökhan";
    }

    /*
    * Enter your age.
    */

    function age(): int
    {
        return 17;
    }

    /*
     * Enter languages that you know.
     */

    function languages(): string
    {
        return "Java, Html, Css, MySQL";
    }

    /*
     * Hello
     */

    function hello(): string
    {
        return "Hello, I'm Mixeration";
    }

    /*
     * Enter your description.
     */

    function description(): string
    {
        return "I'm a student and I'm learning programming.\nI'm 17 years old and I'm from Turkey.\nI like to learn new things.\nI like watching anime, reading scince and & philosophy books, playing with my cat and draw something surreal...

        I am currently working on Php and JavaScript, One of my goals is to create a product that will help humanity.
        I think the photograph taken by each person is a work of art for that person.";
    }

    /*
     * Enter your development status.
     */

    function devStatus(): string
    {
        return "Beginner";
    }

    /*
     * Background colors and animation values
     */

    function bg_color1(): string
    {
        return "black";
    }


    function bg_color2(): string
    {
        return "white";
    }

    function delay(): string
    {
        return '-5s';
    }

    function duration(): string
    {
        return '13s';
    }

```