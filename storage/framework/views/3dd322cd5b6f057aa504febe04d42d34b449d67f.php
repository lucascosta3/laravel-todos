;


<?php $__env->startSection('content'); ?>

    <div class="container w-25 p-4 mt-4" >
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1">Add task</label>
                <input type="text" class="form-control" name="title" placeholder="Add new task">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\Desktop\Lucas\Servidor\todos\resources\views/todos/index.blade.php ENDPATH**/ ?>