<ul class="nav navbar-nav">
    <li class="home <?php if (Request::$current->controller() == 'Index'):?>active<?php endif;?>" ><a href="<?php e::url('admin');?>"><?php echo(__('top_backend.dashboard')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Problem'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/problem');?>"><?php echo(__('top_backend.problem')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'User'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/user');?>"><?php echo(__('top_backend.user')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Contest'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/contest');?>"><?php echo(__('top_backend.contest')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'News'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/news');?>"><?php echo(__('top_backend.news')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Setting'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/setting');?>"><?php echo(__('top_backend.configure')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Groups'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/groups/index');?>"><?php echo(__('Groups')); ?></a></li>
     <li <?php if (Request::$current->controller() == 'Invite'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/Invite/index');?>">邀请码</a></li>

</ul>


