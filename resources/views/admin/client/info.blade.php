@extends('admin.common.master')
@section('title','详情页面')
@section('class','body')
@section('content')

<form class="layui-form layui-form-pane" action="">
	<div class="layui-form-item">
        <label class="layui-form-label">手机号</label>
        <div class="layui-input-block">
            <input type="text" name="title"  class="layui-input" value="{{$info->tel}}" disabled>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">注册时间</label>
        <div class="layui-input-block">
            <input type="text" name="title"  class="layui-input" value="{{$info->regtime}}" disabled>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">最后登录时间</label>
        <div class="layui-input-block">
            <input type="text" name="title"  class="layui-input" value="{{$info->loginlasttime}}" disabled>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">代理</label>
        <div class="layui-input-block">
            <input type="text" name="title"  class="layui-input" value="{{$info->daili}}" disabled>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网址</label>
        <div class="layui-input-block">
            <input type="text" name="title"  class="layui-input" value="{{$info->http}}" disabled>
        </div>
    </div>
 <!--    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
        </div>
    </div> -->
</form>  
@endsection
@section('my-js')
<script>
    layui.use(['form', 'layedit'], function(){
        var form = layui.form
                ,layer = layui.layer
                ,layedit = layui.layedit;

        //监听提交
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            });
            return false;
        });


    });
</script>
@endsection