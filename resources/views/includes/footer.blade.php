<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row mb-15">
                <div class="col-lg-5">
                    <div class="footer-item">
                        <span class="footer-logo">
                            UKM PHOTO UP KMUP
                        </span>
                        <p>{{ trans('user/footer.alamat.p') }}<br>{{ trans('user/footer.alamat.pbr') }}</p>
                        <div class="social-media">
                            <a href="https://www.instagram.com/photoup94" target="_blank"><i
                                    class='bx bxl-instagram'></i></a>
                            <a href="https://www.youtube.com/channel/UCiOalYiee_t57inMNtgSVtA" target="_blank"><i
                                    class='bx bxl-youtube'></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h class="h-item">{{ trans('user/footer.kontak.h') }}</h>
                        <ul class="item">
                            <li><i class='bx bxs-envelope-open'></i><a
                                    href="mailto:photoup1994@gmail.com?subject=Pesan%20untuk%20photo%20up"
                                    target="_blank">photoup1994@gmail.com</a>

                            </li>

                            @php $incrementkontak = 0 @endphp
                            @foreach ($kontak as $kontak)
                                <li><i class='bx bxs-phone'></i>
                                    <a href="https://wa.me/{{ $kontak->konfirmasi_telepon1 }}"
                                        target="_blank">{{ $kontak->telepon1 }}
                                        ({{ $kontak->humas1 }})
                                    </a>
                                </li>
                                <li><i class='bx bxs-phone'></i>
                                    <a href="https://wa.me/{{ $kontak->konfirmasi_telepon2 }}"
                                        target="_blank">{{ $kontak->telepon2 }}
                                        ({{ $kontak->humas2 }})</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <h class="h-item">{{ trans('user/footer.tautan.h') }}</h>
                        <ul class="item">
                            <li><a href="{{ route('view_galeri') }}">{{ trans('user/footer.tautan.galeri') }}</a>
                            </li>
                            {{-- <li><a href="{{ route('testi') }}">{{ trans('user/footer.tautan.testi') }}</a></li> --}}
                            <li><a href="{{ route('faq') }}">{{ trans('user/footer.tautan.faq') }}</a></li>
                            <li><a href="{{ route('acara') }}">{{ trans('user/footer.tautan.acara') }}</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="copyright mt-10">
                <p><i class='bx bx-copyright'></i> {{ trans('user/footer.copy.p') }}</p>
            </div>
        </div>
    </div>
</footer>
