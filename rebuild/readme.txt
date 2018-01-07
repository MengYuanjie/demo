MVC基本流程顺序
入口文件index.php 加载db类
-> layout.php 页面基本结构
-> routes.php 根据传参调用controller方法
-> controllers/*  提供方法供routes.php调用  controller方法内加载model层方法   同时会加载views层内容
-> models/* 底层数据查询方法
-> views/页面/* views层 被 controller调用 显示 model层查询的最终数据
