<!-- loading page -->
<div id="wrapp-loading-page" class="wrapp-loading-page" style="display: flex; position: fixed; top: 0; left: 0; right: 0; bottom: 0; justify-content: center; align-items: center; background-color: #fff; z-index: 99999999999999999999999999;">
    <img src="images/logo.png" alt="" class="logo-loading">
        <div class="container-loading">
            <div class="border-loading border-satu"></div>
            <div class="border-loading border-dua"></div>
        </div>
        <p class="txt-link-web-load">
            www.todstore.com
        </p>
    </div>

<div class="wrapp-register">
        <div class="container-black-login">
        <div style="display:flex; justify-content: center; margin-bottom: 10px;">
            <img src="images/logo.png" alt="" class="logo-login" style="width: 80px;">
            </div>
            
            <p class="title-login">
                Register your account
            </p>

            <label for="label" class="label-input">
                Username
            </label>
            <input type="text" name="username" class="input-login">

            <label for="label" class="label-input">
                Email
            </label>
            <input type="email" name="email" class="input-login">

            <label for="label" class="label-input">
                Pilih Status Pengguna
            </label>
            
            <div class="container-input-admin">
                <div class="container-admin">
                    <input type="radio" name="level" value="admin" class="input-admin">
                    <p class="txt-admin">
                        Admin
                    </p>
                </div>
                <div class="container-admin">
                    <input type="radio" name="level" value="member" class="input-admin">

                    <p class="txt-admin">
                        Member
                    </p>
                </div>
            </div>

            <button class="btn-login">
                Register
            </button>

            <div class="non-akun">
                <p class="txt-non-akun">
                    Anda sudah punya akun?
                </p>
                <button class="btn-register" onclick="toPage('login')">
                    Login
                </button>
            </div>
        </div>
    </div>