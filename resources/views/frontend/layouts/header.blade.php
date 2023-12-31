<!-- Header area start here -->
<div class="top__header pt-30 pb-30">
    <div class="container">
        <div class="top__wrapper">
            <a href="/" class="main__logo">
                <img src="{{ asset('assets-landing/images/logo/logo.svg') }}" alt="logo__image">
            </a>
            <div class="search__wrp">
                <input placeholder="Buscar" aria-label="Search">
                <button><i class="fa-solid fa-search"></i></button>
            </div>
            <div class="account__wrap">
                <div class="account d-flex align-items-center">
                    <div class="user__icon">
                        <a href="{{ route('login') }}">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>
                    <a href="{{ route('login') }}" class="acc__cont">
                        <span>
                            Acceso
                        </span>
                    </a>
                </div>
                <div class="cart d-flex align-items-center">
                    <span class="cart__icon">
                        <i class="fa-regular fa-cart-shopping"></i>
                    </span>
                    <a href="#0" class="c__one">
                        <span>
                            Bs0.00
                        </span>
                    </a>
                    <span class="one">
                        0
                    </span>
                </div>
                <div class="flag__wrap">
                    <div class="flag">
                        <img src="assets-landing/images/flag/us.png" alt="flag">
                    </div>
                    <select name="flag">
                        <option value="0">
                            Bol
                        </option>

                    </select>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- aui terminaba el header -->