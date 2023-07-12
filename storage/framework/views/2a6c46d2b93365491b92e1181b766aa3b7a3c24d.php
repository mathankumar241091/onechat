<div class="message-wrapper">
   <ul class="messages">
          <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="message clearfix">
              
                <div class="<?php echo e(($message->from == Auth::id()) ? 'sent' : 'received'); ?>">
                    <p><?php echo e($message->message); ?></p>
                    <p class="date"><?php echo e(date('d M y, h:i a', strtotime($message->created_at))); ?></p>
                </div>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>  
</div>

<div class="input-text">
   <input type="text" name="message" class="submit">
</div><?php /**PATH C:\xampp\htdocs\laravel\oneChatPusher\resources\views/messages/index.blade.php ENDPATH**/ ?>