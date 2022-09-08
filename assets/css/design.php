
<style>
    <?php include '../../settings.php';?>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        background-color: <?= bg_color1(); ?>;
        animation-name: background;
        animation-delay: -12s;
        animation-duration: 7s;
        animation-iteration-count: infinite;
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
</style>