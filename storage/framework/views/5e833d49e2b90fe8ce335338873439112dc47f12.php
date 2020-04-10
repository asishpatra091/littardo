<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            <div class="image" style="background-image:url('<?php echo e(asset(Auth::user()->avatar_original)); ?>')"></div>
            <div class="name"><?php echo e(Auth::user()->name); ?></div>
        </div>
        <div class="sidebar-widget-title py-3">
            <span><?php echo e(__('Menu')); ?></span>
        </div>
        <div class="widget-profile-menu py-3">
            <ul class="categories categories--style-3">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(areActiveRoutesHome(['dashboard'])); ?>">
                        <i class="la la-dashboard"></i>
                        <span class="category-name">
                            <?php echo e(__('Dashboard')); ?>

                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('purchase_history.index')); ?>" class="<?php echo e(areActiveRoutesHome(['purchase_history.index'])); ?>">
                        <i class="la la-file-text"></i>
                        <span class="category-name">
                            <?php echo e(__('Purchase History')); ?>

                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('wishlists.index')); ?>" class="<?php echo e(areActiveRoutesHome(['wishlists.index'])); ?>">
                        <i class="la la-heart-o"></i>
                        <span class="category-name">
                            <?php echo e(__('Wishlist')); ?>

                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('profile')); ?>" class="<?php echo e(areActiveRoutesHome(['profile'])); ?>">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            <?php echo e(__('Manage Profile')); ?>

                        </span>
                    </a>
                </li>
                <?php if(\App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1): ?>
                    <li>
                        <a href="<?php echo e(route('wallet.index')); ?>" class="<?php echo e(areActiveRoutesHome(['wallet.index'])); ?>">
                            <i class="la la-dollar"></i>
                            <span class="category-name">
                                <?php echo e(__('My Wallet')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(route('support_ticket.index')); ?>" class="<?php echo e(areActiveRoutesHome(['support_ticket.index'])); ?>">
                        <i class="la la-support"></i>
                        <span class="category-name">
                            <?php echo e(__('Support Ticket')); ?>

                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
            <div class="widget-seller-btn pt-4">
                <a href="<?php echo e(route('shops.create')); ?>" class="btn btn-anim-primary w-100"><?php echo e(__('Be A Seller')); ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/littardoemporium/public_html/shop/resources/views/frontend/inc/customer_side_nav.blade.php ENDPATH**/ ?>