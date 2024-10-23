<div id="headerTop">
    <div id="left"></div>
    <div id="middle">
        <a href="<?= BASEURL ?>">
            <p><?= strtoupper($config["titles"]["header"]) ?></p>
        </a>
    </div>
    <div id="right">
        <div id="menuIcon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<nav id="navigation">
    <?php
    $navigation = file_get_contents(BASEURL . "public/assets/json/nav.json");
    $navigation = json_decode($navigation, true);

    foreach ($navigation as $nav) {

        if ($nav["url"] == "" OR str_contains($nav["url"], "https://") OR str_contains($nav["url"], "http://")) {
            $nav_url = $nav["url"];
        } else {
            $nav_url = BASEURL . $nav["url"];
        }
        ?>
    <a href="<?= $nav_url ?>" class="navItem">
        <p><?= $nav["name"] ?></p>
    </a>
    <?php } ?>
</nav>