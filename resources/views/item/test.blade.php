@extends('layouts.common')

@section('title', 'ホーム画面')

@section('css')
  <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
  <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
@endsection

<!-- SweetAlert2の本体-->




@section('script')
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
  <script src="{{ asset('js/slider.js')}}"></script>
  <script src="{{ asset('js/modal.js')}}"></script>
@endsection


@section('content')

{{-- <!-- スライダーのコンテナ -->
<div class="swiper">
  <!-- 必要に応じたwrapper -->
  <div class="swiper-wrapper">
  <!-- スライド -->
  <div class="swiper-slide"><img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover 
    object-center sm:mb-0 mb-4" src={{ asset("images/noimage3.png")}}></div>
  <div class="swiper-slide"><img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover 
    object-center sm:mb-0 mb-4" src={{ asset("images/tyesu.jpg")}}></div>
  <div class="swiper-slide"><img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover 
    object-center sm:mb-0 mb-4" src={{ asset("images/noimage3.png")}}></div>
  </div>
  <!-- 必要に応じてページネーション -->
  <div class="swiper-pagination"></div>
  <!-- 必要に応じてナビボタン -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div> --}}

<div>
<section class="section">
  <div class="section__inner">
    <div class="section__button-wrapper">
      <button type="button" data-micromodal-trigger="modal-1" class="button">Open</button>
    </div>
  </div>
</section>

<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-1-title">
          contents
        </h2>
        <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
      </header>
      <main class="modal__content" id="modal-1-content">
        <p>
          I love three.js♡ I love three.js♡<br>
          I love three.js♡ I love three.js♡<br>
          I love three.js♡ I love three.js♡<br>
          I love three.js♡ I love three.js♡<br>
          I love three.js♡ I love three.js♡<br>
        </p>
      </main>
    </div>
  </div>
</div>
</div>

<td>
  <a href="#" data-id="1" onclick="deletePost(this)" class="btn btn-danger">削除</a>
</td>

<div>
  <input type="button" onclick="warning()" value="アラート">
</div>


@endsection


<script>
  Swal.fire({
  title: 'タイトル'
, html : 'textを入力してください。'
, showCancelButton : true
, cancelButtonText : 'やめる'
}).then(function(result) {
  console.log(result);
});
</script>

<script>
    function warning() {
      swal({
        title: '好きなタイトルを入力',
        text: "好きなテキストを入力",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK'
    }).then(result) => {
      document.getElementById('delete_' + e.dateset.id);
    }
  }

</script>

<script>
  function deletePost(e) {
      'use strict';
      $i = document.getElementById('delete_' + 1).submit();
      console.log($i):
  }
</script>