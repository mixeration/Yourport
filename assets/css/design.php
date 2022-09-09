
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