        <div class="user_list"><?php shuffle($users); foreach($users as $user): ?> 
            <?php echo anchor('profile/view/' . $user['username'], $user['first_name'] . ' ' . $user['last_name']); ?><br/>
        <?php endforeach; ?>
        </div>
