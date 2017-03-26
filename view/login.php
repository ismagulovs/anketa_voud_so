<div class="col-md-12 text-center"><h2>Вход</h2></div>
<form class="form-horizontal">
    <div class="form-group">
        <label for="obl" class="col-sm-4 control-label">Область</label>
        <div class="col-sm-6">
            <select id="obl" class="form-control"></select>
        </div>
    </div>
    <div class="form-group">
        <label for="raion" class="col-sm-4 control-label">Район</label>
        <div class="col-sm-6">
            <select id="raion" class="form-control"></select>
        </div>
    </div>
    <div class="form-group">
        <label for="uchZav" class="col-sm-4 control-label">Учебное заведение</label>
        <div class="col-sm-6">
            <select id="uchZav" class="form-control"></select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Пароль</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="password" placeholder="Пароль">
        </div>
    </div>
    <div class="form-group" >
        <div class="col-sm-offset-2 col-sm-8">
            <h3><div class="alert alert-danger text-center" role="alert" style="display: none" id="error"></div></h3>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block" id="login">Войти</button>
        </div>
    </div>

</form>