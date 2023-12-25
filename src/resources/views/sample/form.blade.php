<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <dt>お引渡し年月日</dt>
    <dd class="two delivery">
        <div class="date">
            <p><label for="year">西暦</label>
                <select class="delivery_select purchase_year" name="purchase_year">
                    @foreach ( $years as $y )
                        <option value="{{ $y }}" @if( old('purchase_year') == $y ) selected @endif>{{ $y }}</option>
                    @endforeach
                </select>
                </select><span>年</span>
            </p>
            <p><label for="year"></label>
                <select class="delivery_select purchase_month" name="purchase_month" old="{{ old('purchase_month') ? : 1 }}">
                </select>
                <span>月</span>
            </p>
            <p><label for="year"></label>
                <select class="delivery_select purchase_day"  name="purchase_day" old="{{ old('purchase_day') ? : 1 }}">
                </select>
                <span>日</span>
            </p>
        </div>
        <div>
            <p class="error">{{$errors->first('purchase_year')}}</p>
            <p class="error">{{$errors->first('purchase_month')}}</p>
            <p class="error">{{$errors->first('purchase_day')}}</p>
            <p class="error">{{$errors->first('expired')}}</p>
        </div>
    </dd>
    <script src="/js/form.js"></script>
</div>
</body>
</html>