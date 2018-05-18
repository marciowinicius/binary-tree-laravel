{{ csrf_field() }}
<h6>Cadastro de vendedores</h6>
<div class="input-field col s12 {{ $errors->has('name') ? ' has-error' : '' }}">
    <input autocomplete="off" id="name" required name="name" type="text"  class="validate" length="255" minlength="3" value="{{old('name')}}">
    <label class="active" for="name">Nome</label>
    @if ($errors->has('name'))
        <span class="red-text text-darken-2">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
    <input autocomplete="off" id="email" required name="email" type="email"  class="validate" length="255" minlength="3" value="{{old('email')}}">
    <label class="active" for="name">Email</label>
    @if ($errors->has('email'))
        <span class="red-text text-darken-2">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="input-field col s4 {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <select name="user_id" class="js-states browser-default" id="user_id">
        <option value="option_select" disabled selected>Escolha um parent caso possua</option>
        @foreach($users as $user)
            <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
        @endforeach
    </select>
    @if ($errors->has('user_id'))
        <span class="red-text  text-darken-2">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
    @endif
</div>
<div class="col s12 right-align m-t-sm">
    <button type="submit" class="waves-effect waves-light btn"><i class="material-icons left">save</i>Salvar
    </button>
</div>