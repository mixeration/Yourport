
<style>
    <?php include '../../settings.php';?>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        overflow-x: hidden;
        background-color: <?= bg_color1(); ?>;
        animation-name: background;
        animation-delay: <?= delay() ?>;
        animation-duration: <?= duration() ?>;
        animation-iteration-count: infinite;
    }

    /*
        @mixeration: Hello page
     */

    .hello {
        display: block;
        position: sticky;
        text-align: center;
        font-family: "Fabrica", ui-serif;
    }

    .hello h1 {
        font-family: "Fabrica", ui-serif;
        color: <?= bg_color2(); ?>;
        font-size: 28px;
        animation-name: color;
        animation-delay: <?= delay() ?>;
        animation-duration: <?= duration() ?>;
        animation-iteration-count: infinite;
        transform: translateY(500%);
    }

    .hello p {
        font-family: "Fabrica", ui-serif;
        color: <?= bg_color2(); ?>;
        animation-name: color;
        font-size: 19px;
        animation-delay: <?= delay() ?>;
        animation-duration: <?= duration() ?>;
        animation-iteration-count: infinite;
        transform: translateY(800%);
    }

    .line {
        width: 100%;
        display: block;
        position: sticky;
        height: 2px;
        transform: translateY(-5000%);
        background-color: <?= bg_color1(); ?>;
    }

    .whoami {
        width: 100%;
        display: block;
        position: sticky;
        height: 500px;
        transform: translateY(80%);
        background: <?= bg_color2(); ?>;
    }

    .whoami p {
        font-family: "Fabrica", ui-serif;
        text-align: left;
        width: 50%;
        transform: translate(30%, 200%);
        color: <?= bg_color1(); ?>;
        font-size: 19px;
    }

    .whoami h1 {
        font-family: "Fabrica", ui-serif;
        text-align: left;
        transform: translate(10%, 450%);
        color: <?= bg_color1(); ?>;
    }

    .whoami img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto;
        display: block;
        position: absolute;
        float: right;
        top: 32%;
        right: 10%;
    }


    /*


        Yourport : @keyframes Animations


     */

    @keyframes background {
        0% {
            background: <?= bg_color1(); ?>;
        }
        25% {
            background: <?= bg_color2(); ?>;
        }
        50% {
            background: <?= bg_color1(); ?>;
        }
        75% {
            background: <?= bg_color2(); ?>;
        }
        100% {
            background: <?= bg_color1(); ?>;
        }
    }

    @keyframes backgroundAnt {
        0% {
            background: <?= bg_color2(); ?>;
        }
        25% {
            background: <?= bg_color1(); ?>;
        }
        50% {
            background: <?= bg_color2(); ?>;
        }
        75% {
            background: <?= bg_color1(); ?>;
        }
        100% {
            background: <?= bg_color2(); ?>;
        }

    @keyframes color {
        0% {
            color: <?= bg_color2(); ?>;
        }
        25% {
            color: <?= bg_color1(); ?>;
        }
        50% {
            color: <?= bg_color2(); ?>;
        }
        75% {
            color: <?= bg_color1(); ?>;
        }
        100% {
            color: <?= bg_color2(); ?>;
        }
    }

</style>