<?php $__env->startSection('content'); ?>
<section class="create">
    <form method="POST" action="/movies/<?php echo e($movie->id); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo e($movie->title); ?>">
        </div>

       <div class="form-group">
            <label for="language">Language:</label>
            <select id="language" name="language" required>
                <option value="..." disabled></option>
                <option value="German" <?php echo e($movie->language == 'german' ? 'selected' : ''); ?>>German</option>
                <option value="Chinese" <?php echo e($movie->language == 'chinese' ? 'selected' : ''); ?>>Chinese</option>
                <option value="French" <?php echo e($movie->language == 'french' ? 'selected' : ''); ?>>French</option>
                <option value="Spanish" <?php echo e($movie->language == 'spanish' ? 'selected' : ''); ?>>Spanish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="genres">Genres:</label>
            <select id="genres" name="genres[]" multiple required>
                <option value="Thriller" <?php echo e($movie->genres == 'Thriller' ? 'selected' : ''); ?>>Thriller</option>
                <option value="Comedy" <?php echo e($movie->genres == 'Comedy' ? 'selected' : ''); ?>>Comedy</option>
                <option value="Drama" <?php echo e($movie->genres == 'Drama' ? 'selected' : ''); ?>>Drama</option>
                <option value="Romcom" <?php echo e($movie->genres == 'Romcom' ? 'selected' : ''); ?>>Romcom</option>
                <option value="Horror" <?php echo e($movie->genres == 'Horror' ? 'selected' : ''); ?>>Horror</option>
                <option value="Historic" <?php echo e($movie->genres == 'Historic' ? 'selected' : ''); ?>>Historic</option>
                <option value="Mystery" <?php echo e($movie->genres == 'Mystery' ? 'selected' : ''); ?>>Mystery</option>
                <option value="Romance" <?php echo e($movie->genres == 'Romance' ? 'selected' : ''); ?>>Romance</option>
                <option value="Action" <?php echo e($movie->genres == 'Action' ? 'selected' : ''); ?>>Action</option>
            </select>
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" id="year" name="year"  value="<?php echo e($movie->year); ?>">
        </div>

        <div class="form-group">
            <label for="directors">Directors:</label>
            <input type="text" id="directors" name="directors"  value="<?php echo e($movie->directors); ?>">
        </div>

        <div class="form-group">
            <label for="length">Length:</label>
            <input type="number" id="length" name="length" value="<?php echo e($movie->length); ?>">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4"><?php echo e($movie->description); ?></textarea>
        </div>

        <div class="form-group">
            <label for="logo">Image:</label>
            <input type="file" id="logo" name="logo" value="<?php echo e($movie->logo); ?>">
        </div>

        <button type="submit">Edit <?php echo e($movie -> title); ?></button>
        </form>
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Wamp.NET\sites\bablingo.dev\resources\views/movies/edit.blade.php ENDPATH**/ ?>