<?php
#命名空间
#同一个命名空间方法名不能相同
#define 定义一个常量不能同名
#const  定义变量

#总结 命名空间只对 方法(函数), const定义的变量有用，class 类有用

# 命名空间 以及引用空间的调用
#----------------------------------
#多级命名空间 最后以及命名空间为子集命名空间 为虚拟的目录
#1非限定名称访问方式
  # 1.1 访问的时候没有指定访问的命名空间 就是指访问的当前命名空间
#2 限定名称访问方式

#3 完全限定名称访问方式

namespace beijing\tiananmen;
function getmsg(){
    echo '123';
}
const yanghaowei = "212121";
class Animals {
    public $obj = 'dog';
}
namespace shanghai\pudongqu;
const yanghaowei = "212122133";
function getmsg(){
    echo '456';
};
class Animals {
    public $obj = 'cat';
}
getmsg(); # 1 非限定名称访问方式
echo \beijing\tiananmen\getmsg(); #3 完全限定名称访问方式
echo \shanghai\pudongqu\yanghaowei; #3 完全 限定反问方式

beijing\tiananmen\getmsg(); #2 限定名称访问方式


#限定名称访问方式 与 完全限定名称反问方式的区别
#1 写法: 限定名称没有第一个\  完全限定的第一个\
#2 限定名称是相对于当前的命名空间去找指定的命名空间
#3 是从项目的根目录去找