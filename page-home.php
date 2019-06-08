  <header>
  <div class="overlay"></div>
  <?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="por text-center">
        <h1 class=" text-center"> اهلا بك فى مؤسسة الخبير الإستشاريه </h1>
        <p class=" text-center">سُبحانَكَ اللَهُمَّ خَيرَ مُعَلِّمٍ عَلَّمتَ بِالقَلَمِ القُرونَ الأولى
        </p>
        <?php get_search_form() ?>
        <p class=" text-center lsp">قم بتسجيل الدخول أو إنشاء حساب جديد‏ لتصفح الاستشارات السابقة وتقديم طلب لاستشارات جديدة
        </p>
      </div>
    </div>
  </div>
</header>
<section>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-3 col-6 fr text-center text-white numb">
        <span>213</span>
        <p class="text-center">مستشار</p>
      </div>


      <div class="col-sm-3 col-6 sc text-center text-white numb">
        <span>1200000</span>
        <p class="text-center">زائر سنويًا</p>
      </div>


      <div class="col-sm-3 col-6 th text-center text-white numb">
        <span>38064</span>
        <p class="text-center">استشارة منذ افتتاح الموقع
        </p>
      </div>


      <div class="col-sm-3 col-6 fh text-center text-white numb">
        <span>24994</span>
        <p class="text-center">مستفيد
          ومسترشد</p>
      </div>

    </div>
  </div>
</section>
<section class="section cpad">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-9 cpad">
        <div class="theform  "><div class="overlay"></div>
          <h3 class="">قم بتقديم استشارتك وسيتم الرد عليك فى خلال 24 ساعة </h3>
          <div class="col-12 cpad">
            <form>
              <div class="form-group row">
                <label for="inlineFormInputName" class="col-sm-2 col-form-label">الإسم الثلاثي </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control btn-lg" id="inlineFormInputName" placeholder="الإسم الكريم">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> الإيميل :</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control btn-lg" id="inputEmail3" placeholder="البريد الإلكترونى">
                </div>
              </div>
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">نوع الإستشاره </legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        دينيه
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        قانونيه
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        اجتماعيه
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        اسرية
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">نص الإستشارة</label>
                <div class="col-sm-10">
                  <textarea class="form-control btn-lg"  placeholder="اكتب استشارتك هنا.."></textarea>
                </div>
              </div>
              <div class="form-group row ">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary btn-lg">إرسال</button>
                </div>
              </div>
            </form>
            <br>
            <br>
          </div>
        </div>
        <div class="second-explain">
          <p class="text-white">
            تقتضي الشورى استشارة صاحب الأمر أشخاصاً يتمتعون بصفات معينة، ومن هذه الصفات، الذكاء، والفطنة، والتعقل، وسداد الرأي، وكتمان السر، فمن الخطأ استشارة شخص متخاذل ولا يمتلك المعرفة، ومن الأفضل أن يكون المستشار مدركاً بصورة معمّقة للمجتمع وكل ما يدور حوله، فليس من الصواب مشورة رجل طاعن في السن  عفى عليه الزمن وخاصة في الأمور والقضايا الخاصة بالشباب .  <br>
            في المشورة ترفع عن الأوامر وجبر للخواطر، وخاصة لأصحاب الخبرة، كما أنها تحمي أصحاب الأمر من الإعجاب بالنفس والغروب.
          </p>
        </div>
      </div>
      <div class="col-md-3 cpad">
        <?php
        if (is_active_sidebar('main-sidebar')) {
          dynamic_sidebar('main-sidebar');
        }
        ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>