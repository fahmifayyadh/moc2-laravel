<form action="{{route('facebookPixel.pixel')}}" method="POST">
    @csrf
        <label>ID Pixel</label>
        <br>
        <input type="text" id="id_pixel" name="pixel_id"
            value="{{$c->agent()->where([['paket_id',$c->id],['user_id',auth()->user()->id]])->first()->pixel ?? null}}"
            placeholder="masukan ID">
        <input type="hidden" id="product_id" name="product_id" value="{{$c->id}}">
        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
</form>
<div class="alert-holder"></div>
<div class="fb-pixel-links-holder">
    <ol>
        <li>
            <p><b>Silahkan Salin link berikut</b></p>
            <hr>
            <p>URL Equals</p>
            <div class="ui fluid action input">
                <input id="myInput" name="fb-pixel-link-checkout" type="text" value="{{$link ?? 'kosong'}}" readonly="">
                <button class="btn btn-success btn-sm" onclick="myFunction()"
                    data-clipboard-target="#fb-pixel-link-checkout"><i class="copy icon"></i> Copy</button>
            </div>
        </li>
        <br>
        {{-- <li>
          <p><b>Event pada saat menekan Beli Sekarang</b></p>
          <hr>
          <p></p>
          <br>
          <div class="ui fluid action input">
            <input id="myInput" name="fb-pixel-link-submit" type="text" value="{{$link ?? 'kosong'}}" readonly="">
        <button class="ui teal right labeled icon button copy-btn" onclick="myFunction()"
            data-clipboard-target="#fb-pixel-link-submit"><i class="copy icon"></i> Copy</button>
</div>
</li>
<br>
<li>
    <p><b>Event pada Redirect Page</b></p>
    <hr>
    <p>URL Contains</p>
    <div class="ui fluid action input">
        <input id="fb-pixel-link-redirect" name="fb-pixel-link-redirect" type="text" value="{{$link ?? 'kosong'}}"
            readonly="">
        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-redirect"><i
                class="copy icon"></i> Copy</button>
    </div>
</li>
<br>
<li>
    <p><b>Event pada Invoice</b></p>
    <hr>
    <p>URL Contains</p>
    <div class="ui fluid action input">
        <input id="fb-pixel-link-invoice" name="fb-pixel-link-invoice" type="text" value="{{$link ?? 'kosong'}}"
            readonly="">
        <button class="ui teal right labeled icon button copy-btn" data-clipboard-target="#fb-pixel-link-invoice"><i
                class="copy icon"></i> Copy</button>
    </div>
</li> --}}

</ol>

</div>