<div class="page">
    
    <form action="<?php echo url_generate(['route' => 'authenticate']); ?>" method="POST" class="form form-login">
        <h2>Área Reservada</h2>
        <div class="horizontal-line"></div>
        <div class="form-group flex flex-col">
            
            <input placeholder="Usuário" type="text" name="username" id="username" require> 
        </div>
        <div class="form-group flex flex-col">
            
            <input placeholder="Senha" type="password" name="password" id="password" require>
        </div>
        <div class="form-group">
            <button>Login</button>
        </div>
    </form>
</div>