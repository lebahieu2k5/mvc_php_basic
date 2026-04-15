<section class="card">
    <h2>Trang chu MVC</h2>
    <p>Day la view trong cau truc MVC co ban.</p>
    <p><strong><?php echo htmlspecialchars($message); ?></strong></p>

    <div class="box">
        <p><strong>Cau truc dang dung:</strong></p>
        <ul>
            <li>Controller: xu ly request</li>
            <li>Model: xu ly du lieu / database</li>
            <li>View: giao dien HTML</li>
        </ul>
    </div>

    <div class="box">
        <p><strong>URL test:</strong></p>
        <p><a href="<?php echo BASE_URL; ?>">/public/</a></p>
        <p><a href="<?php echo BASE_URL; ?>home/index">/public/home/index</a></p>
        <p><a href="<?php echo BASE_URL; ?>index.php?url=home/index">/public/index.php?url=home/index</a></p>
    </div>
</section>
