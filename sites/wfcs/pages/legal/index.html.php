---
@layout: 
    path: /default
    pageclass: legal

title: Legal
summary: Legal Information
metadata:
    robots: [none]
state:
    visible: false
---

<!-- ====== Section Start -->
<section class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark lg:pb-20 lg:pt-[160px]">
    <div class="container">
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="flex flex-wrap">
                    <div class="px-4 max-w-prose mx-auto">
                        <h2 class="wow fadeInUp mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]" data-wow-delay=".1s">
                            Legal information
                        </h2>
                        <p class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                            Effective Date: January 01, 2024
                        </p>
                        <? 
                            $folder = PAGES_SITE_ROOT.'/data/policies';
                        ?>
                        <ul class="list-disc">
                            <? foreach (array_filter(glob($folder.'/*'), 'is_file') as $file): ?>
                            <li>
                                <a href="/sites/wfcs/data/policies/<?= basename($file) ?>" class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                                    <?=
                                        ucwords(str_replace("-"," ",pathinfo(basename($file), PATHINFO_FILENAME)));
                                    ?>
                                </a>
                            </li>
                            <? endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Section End -->
<!-- ====== Page title Section End -->
<section class="pb-10 pt-20 dark:bg-dark lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap justify-center max-w-prose mx-auto">
            <div class="-mx-3 flex items-center justify-center md:justify-start">
              <a href="/legal/privacy" class="px-3 text-base font-medium text-dark dark:text-white"> Privacy policy </a>
              <a href="/legal/terms-and-conditions" class="px-3 text-base font-medium text-dark dark:text-white"> Terms &amp; Conditions </a>
            </div>
        </div>
    </div>
</section>