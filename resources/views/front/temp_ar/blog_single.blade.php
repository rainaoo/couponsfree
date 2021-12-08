@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-7 col-md-8">
                        <!-- Blog Area -->
                        <div class="blog-area blog-single-post">
                            <div class="row row-tb-20">
                                <!-- Blog Post -->
                                <div class="blog-post col-xs-12">
                                    <article class="entry panel">
                                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/blog/blog_01.jpg')}}">
                                            <div class="entry-date">
                                                <h4>13</h4>
                                                <h6>يناير</h6>
                                            </div>
                                        </figure>
                                        <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                            <header class="entry-header">
                                                <h4 class="entry-title mb-10 mb-md-15">
                                        بطارية احتياطية للهواتف الذكية من انكر بقدرة 5200 ملي امبير، اسود                                       </h4>
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="icon fa fa-user"></i> من طرف : احمد ابو زيد</li>
                                                        <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p class="mb-20">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.</p>
                                                <blockquote class="block-quote mb-20">
                                                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                                </blockquote>
                                                <p class="mb-20">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. </p>
                                                <div class="gallery mb-20">
                                                    <div class="row row-rl-10">
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('front/assets/images/blog/post_01.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('front/assets/images/blog/post_02.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('front/assets/images/blog/post_03.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-20">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. </p>
                                                <h5 class="mb-10">ما هو "لوريم إيبسوم" ؟</h5>
                                                <p>إذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
                                                <ul class="mb-20 list-styled">
                                                    <li>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم</li>
                                                    <li>ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</li>
                                                    <li>لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب</li>
                                                </ul>
                                                <p class="mb-20">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. </p>
                                                <p class="mb-30">إذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
                                                <div class="gallery mb-20">
                                                    <div class="row row-rl-10 row-tb-10">
                                                        <div class="col-sm-6">
                                                            <img src="{{asset('front/assets/images/blog/post_04.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="{{asset('front/assets/images/blog/post_05.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-20">إذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
                                                <p class="mb-30">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. </p>
                                            </div>
                                            <!-- .entry-wrapper -->
                                            <footer class="entry-footer">
                                                <div class="blog-post-tags ptb-20">
                                                    <ul>
                                                        <li>Tags :</li>
                                                        <li>
                                                            <a href="#">Deals</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Shopping</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Coupons</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Commercial</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="share-buttons ptb-20">
                                                    <li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                                                    <li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                                                    <li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
                                                    <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li>
                                                </ul>
                                            </footer>
                                        </div>
                                    </article>
                                    <ul class="posts-nav ptb-40 mb-20">
                                        <li class="next-post pr-40">
                                            <a href="#"><i class="fa fa-angle-left"></i>
                                <span>المنشور التالي</span>
                                 لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.</a>
                                        </li>
                                        <li class="prev-post pr-40">
                                            <a href="#"><i class="fa fa-angle-right"></i>
                                <span>المنشور السابق</span>
                                 لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Blog Post -->
                                <!-- Post Author -->
                                <div class="col-xs-12">
                                    <div class="post-author-area panel media p-20">
                                        <figure class="media-right">
                                            <img class="media-object" src="{{asset('front/assets/images/avatars/blog_author.jpg')}}" alt="">
                                        </figure>
                                        <div class="media-body">
                                            <h3>احمد ابو زيد</h3>
                                            <h5>مطور و مصمم</h5>
                                            <p class="color-mid">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي</p>
                                            <ul class="social-icons list-inline">
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Author -->
                                <!-- Related Posts -->
                                <div class="col-xs-12">
                                    <div class="related-posts panel pt-20 pb-30 prl-20">
                                        <h3 class="related-posts-title h-title mb-30">مواضيع ذات صلة</h3>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="#">
                                                    <figure class="mb-10">
                                                        <img src="{{asset('front/assets/images/blog/post_10.jpg')}}" alt="">
                                                    </figure>
                                                    <p class="font-14"> لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.</p>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="#">
                                                    <figure class="mb-10">
                                                        <img src="{{asset('front/assets/images/blog/post_11.jpg')}}" alt="">
                                                    </figure>
                                                    <p class="font-14"> لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.</p>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="#">
                                                    <figure class="mb-10">
                                                        <img src="{{asset('front/assets/images/blog/post_01.jpg')}}" alt="">
                                                    </figure>
                                                    <p class="font-14"> لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Related Posts -->
                                <!-- Comments Area -->
                                <div id="commentsArea" class="comments-area col-xs-12">
                                    <div class="row row-v-20">
                                        <div class="col-xs-12">
                                            <div class="posted-comments panel pt-20 pb-30 prl-20">
                                                <h3 class="posted-comments-title h-title mb-30">7 Comments</h3>
                                                <ol class="comment-list">
                                                    <li class="comment comment-bypostauthor media">
                                                        <figure class="comment-author-thumb media-right">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_07.jpg')}}" alt="" />
                                                            </a>
                                                        </figure>
                                                        <article class="comment-wrapper media-body">
                                                            <!-- Comment Metadata -->
                                                            <div class="comment-meta mb-5">
                                                                <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                <h5 class="comment-author-name mb-5 ">احمد ابو زيد</h5>
                                                                <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                            </div>
                                                            <!-- End Comment Metadata -->
                                                            <!-- Comment Content -->
                                                            <div class="comment-content color-mid">
                                                                <p>إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.</p>
                                                            </div>
                                                            <!-- End Comment Content -->
                                                        </article>
                                                        <ol class="comment-replays">
                                                            <li class="comment media">
                                                                <figure class="comment-author-thumb media-right">
                                                                    <a href="#">
                                                                        <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_08.jpg')}}" alt="" />
                                                                    </a>
                                                                </figure>
                                                                <article class="comment-wrapper media-body">
                                                                    <!-- End Comment Metadata -->
                                                                    <div class="comment-meta mb-5">
                                                                        <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                        <h5 class="comment-author-name mb-5">احمد ابو زيد</h5>
                                                                        <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                                    </div>
                                                                    <!-- Comment Content -->
                                                                    <div class="comment-content color-mid">
                                                                        <p>200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي.</p>
                                                                    </div>
                                                                    <!-- End Comment Content -->
                                                                </article>
                                                            </li>
                                                            <li class="comment media comment-bypostauthor">
                                                                <figure class="comment-author-thumb media-right">
                                                                    <a href="#">
                                                                        <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_07.jpg')}}" alt="" />
                                                                    </a>
                                                                </figure>
                                                                <article class="comment-wrapper media-body">
                                                                    <!-- End Comment Metadata -->
                                                                    <div class="comment-meta mb-5">
                                                                        <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                        <h5 class="comment-author-name mb-5">احمد ابو زيد</h5>
                                                                        <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                                    </div>
                                                                    <!-- Comment Content -->
                                                                    <div class="comment-content color-mid">
                                                                        <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                                                                    </div>
                                                                    <!-- End Comment Content -->
                                                                </article>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="comment media">
                                                        <figure class="comment-author-thumb media-right">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_03.jpg')}}" alt="" />
                                                            </a>
                                                        </figure>
                                                        <article class="comment-wrapper media-body">
                                                            <!-- Comment Metadata -->
                                                            <div class="comment-meta mb-5">
                                                                <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                <h5 class="comment-author-name mb-5 ">احمد ابو زيد</h5>
                                                                <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                            </div>
                                                            <!-- End Comment Metadata -->
                                                            <!-- Comment Content -->
                                                            <div class="comment-content color-mid">
                                                                <p>كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص.</p>
                                                            </div>
                                                            <!-- End Comment Content -->
                                                        </article>
                                                    </li>
                                                    <li class="comment media">
                                                        <figure class="comment-author-thumb media-right">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_04.jpg')}}" alt="" />
                                                            </a>
                                                        </figure>
                                                        <article class="comment-wrapper media-body">
                                                            <!-- Comment Metadata -->
                                                            <div class="comment-meta mb-5">
                                                                <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                <h5 class="comment-author-name mb-5 ">احمد ابو زيد</h5>
                                                                <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                            </div>
                                                            <!-- End Comment Metadata -->
                                                            <!-- Comment Content -->
                                                            <div class="comment-content color-mid">
                                                                <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.</p>
                                                            </div>
                                                            <!-- End Comment Content -->
                                                        </article>
                                                        <ol class="comment-replays">
                                                            <li class="comment media">
                                                                <figure class="comment-author-thumb media-right">
                                                                    <a href="#">
                                                                        <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_05.jpg')}}" alt="" />
                                                                    </a>
                                                                </figure>
                                                                <article class="comment-wrapper media-body">
                                                                    <!-- End Comment Metadata -->
                                                                    <div class="comment-meta mb-5">
                                                                        <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                        <h5 class="comment-author-name mb-5">احمد ابو زيد</h5>
                                                                        <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                                    </div>
                                                                    <!-- Comment Content -->
                                                                    <div class="comment-content color-mid">
                                                                        <p>منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص.</p>
                                                                    </div>
                                                                    <!-- End Comment Content -->
                                                                </article>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="comment media">
                                                        <figure class="comment-author-thumb media-right">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('front/assets/images/avatars/avatar_04.jpg')}}" alt="" />
                                                            </a>
                                                        </figure>
                                                        <article class="comment-wrapper media-body">
                                                            <!-- Comment Metadata -->
                                                            <div class="comment-meta mb-5">
                                                                <a href="#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">اضف رد <i class="fa fa-reply"></i></a>
                                                                <h5 class="comment-author-name mb-5 ">احمد ابو زيد</h5>
                                                                <span class="color-muted">31 ديسمبر 2001 الساعة 11:10 مساء</span>
                                                            </div>
                                                            <!-- End Comment Metadata -->
                                                            <!-- Comment Content -->
                                                            <div class="comment-content color-mid">
                                                                <p>طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي.</p>
                                                            </div>
                                                            <!-- End Comment Content -->
                                                        </article>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div id="commentRespond" class="comment-respond panel pt-20 pb-30 prl-20">
                                                <h3 class="comment-respond-title h-title mb-30">اترك تعليقا</h3>
                                                <form action="#" method="post" id="commentForm" class="comment-form">
                                                    <div class="row row-10">
                                                        <div class="col-xs-12">
                                                            <div class="comment-notes alert alert-info">
                                                                <span>لن يتم نشر عنوان بريدك الإلكتروني.</span> يتم وضع علامة الحقول المطلوبة <span class="required">*</span>
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="comment-form-author form-group">
                                                                <label for="author">الاسم <span class="required">*</span></label>
                                                                <input id="author" class="form-control" name="author" type="text" value="" required='required' />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="comment-form-email form-group">
                                                                <label for="email">البريد الإلكتروني <span class="required">*</span></label>
                                                                <input id="email" class="form-control" name="email" type="email" value="" required='required' />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="comment-form-url form-group">
                                                                <label for="url">الموقع الكتروني</label>
                                                                <input id="url" class="form-control" name="url" type="url" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="comment-form-comment form-group">
                                                                <label for="comment">تعليق</label>
                                                                <textarea id="comment" class="form-control" name="comment" cols="45" rows="4" required="required"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-submit">
                                                                <input name="submit" type="submit" id="submit" class="btn submit" value="أضف تعليقا" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Comments Area -->
                            </div>
                        </div>
                        <!-- End Blog Area -->
                    </div>
                    <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Search Form -->
                                    <div class="widget search-form panel ptb-30 prl-20">
                                        <div class="widget-body">
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="ادخل كلمة للبحث">
                                                    <span class="input-group-btn">
                <button class="btn" type="button"><i class="fa fa-search font-16"></i></button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Search Form -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget recent-posts panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">المشاركات الاخيرة</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="recent-post media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('front/assets/images/blog/thumb_1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب</a>
            </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user ml-5"></i>احمد ابو زيد</li>
                                                        <li><i class="ico fa fa-calendar ml-5"></i>14 مارس 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('front/assets/images/blog/thumb_2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب</a>
            </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user ml-5"></i>احمد ابو زيد</li>
                                                        <li><i class="ico fa fa-calendar ml-5"></i>21 مارس 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('front/assets/images/blog/thumb_3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب</a>
            </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user ml-5"></i>احمد ابو زيد</li>
                                                        <li><i class="ico fa fa-calendar ml-5"></i>20 مارس 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('front/assets/images/blog/thumb_4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب</a>
            </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user ml-5"></i>احمد ابو زيد</li>
                                                        <li><i class="ico fa fa-calendar ml-5"></i>11 مارس 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('front/assets/images/blog/thumb_5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب</a>
            </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user ml-5"></i>احمد ابو زيد</li>
                                                        <li><i class="ico fa fa-calendar ml-5"></i>12 مارس 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Categories Widget -->
                                    <div class="widget categories-widget panel pt-20 prl-20">
                                        <div class="widget-header">
                                            <h3 class="widget-title h-title">فئات المدونة</h3>
                                        </div>
                                        <div class="widget-body ptb-20">
                                            <ul>
                                                <li>
                                                    <a href="#">افضل العروض <span>1420</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">التسوق <span>780</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">اللياقه البدنيه <span>670</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">السفر <span>520</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">كوبونات <span>350</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Categories Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <div class="widget archive-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">ارشيف المدونة</h3>
                                        <div class="widget-content ptb-20">
                                            <ul>
                                                <li>
                                                    <a href="#">أغسطس 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">يونيو 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">مايو 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">أبريل 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">مارس 2017</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <!-- Popular Tags -->
                                    <div class="widget popular-tags panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">الكلمات الدلالية</h3>
                                        <div class="widget-body pt-30 pb-20">
                                            <div class="tags">
                                                <a href="#" class="badge">عروض</a>
                                                <a href="#" class="badge">متاجر</a>
                                                <a href="#" class="badge">متجر</a>
                                                <a href="#" class="badge">تخفيض</a>
                                                <a href="#" class="badge">خصم</a>
                                                <a href="#" class="badge">الصحة</a>
                                                <a href="#" class="badge">الملابس</a>
                                                <a href="#" class="badge">السفر</a>
                                                <a href="#" class="badge">الفنادق</a>
                                                <a href="#" class="badge">صفقات</a>
                                                <a href="#" class="badge">كوبونات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Popular Tags -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">تابعنا في انستقرام</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="row row-tb-5 row-rl-5">
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_01.jpg')}}" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_02.jpg')}}" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_03.jpg')}}" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_04.jpg')}}" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_05.jpg')}}" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('front/assets/images/instagram/instagram_06.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Subscribe Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">الاشتراك في البريد</h3>
                                        <div class="widget-content ptb-30">
                                            <p class="color-mid mb-20">احصل على النشرة اليومية للبريد الإلكتروني مع الخدمات الخاصة، والتحديثات، عروض وأكثر!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">الاشتراك</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Subscribe Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">تابعنا في تويتر</h3>
                                        <div class="widget-body ptb-20">
                                            <ul class="twitter-list">
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">هل لديك سؤال ؟</h3>
                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">إذا كنت تواجه أي أسئلة، لا تتردد في طرحها.</p>
                                            <a href="contact_us_01.html" class="btn btn-block"><i class="ml-10 font-15 fa fa-envelope-o"></i>تواصل مع فريق الدعم</a>
                                        </div>
                                    </div>
                                    <!-- End Contact Us Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Trending Stores -->
                                    <div class="widget trend-store-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">المتاجر الشائعة</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('front/assets/images/brands/brand_01.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">Amazon</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="4">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('front/assets/images/brands/brand_02.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">Ashford</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="4">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('front/assets/images/brands/brand_03.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">DELL</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="4">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Trending Stores -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Latest Reviews -->
                                    <div class="widget posted-reviews-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Recent Reviews</h3>
                                        <div class="widget-body ptb-30">
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('front/assets/images/avatars/avatar_01.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="3">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">هناك حقيقة مثبتة منذ زمن طويل وهي...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('front/assets/images/avatars/avatar_02.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="3">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">هناك حقيقة مثبتة منذ زمن طويل وهي...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('front/assets/images/avatars/avatar_03.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="3">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('front/assets/images/avatars/avatar_04.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
                <span class="rating">
                    <span class="rating-stars" data-rating="3">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </span>
                </span>
            </h5>
                                                    <p class="color-mid">وخلال تتبعه لهذه الكلمة في الأدب ...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                        </div>
                                    </div>
                                    <!-- End Latest Reviews -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 