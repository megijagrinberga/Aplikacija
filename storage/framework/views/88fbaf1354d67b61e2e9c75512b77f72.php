<?php $__env->startSection('filter-box'); ?>
<div class="container">
    <div id="filterbox">
        <form action="/" method="GET">
            <div>
                <div>
                    <button type="submit">Filter <i class="fa-solid fa-filter"></i></button>
                </div>
                <label for="genres">Genre:</label>
                <select id="genres-filter" name="genres">
                    <option value=""></option>
                    <option value="Thriller">Thriller</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Romcom">Romcom</option>
                    <option value="Horror">Horror</option>
                    <option value="Historic">Historic</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Action">Action</option>
                </select>
            </div>
            <div>
                <label for="language">Language:</label>
                <select id="language" name="language">
                    <option value=""></option>
                    <option value="German">German</option>
                    <option value="Chinese">Chinese</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                </select>
            </div>

            <div>
                <label for="length">Length:</label>
                <select id="length" name="length">
                    <option value=""></option>
                    <option value="60">Less than 1 hour</option>
                    <option value="90">Less than 1.5 hours</option>
                    <option value="120">Less than 2 hours</option>
                    <option value="180">Less than 3 hours</option>
                </select>
            </div>

            <div>
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" placeholder="">
            </div>
            <?php if(auth()->guard()->check()): ?>
            <div>
                <label for="seen">Exclude seen:</label>
                <input type="checkbox" id="seen" name="seen" value="1">
            </div>

            <div>
                <label for="bookmark">Bookmarked:</label>
                <input type="checkbox" id="bookmark" name="bookmark" value="1">
            </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/partials/_filterbox.blade.php ENDPATH**/ ?>