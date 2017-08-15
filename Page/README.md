
# 分页类
下载源码，参照demo文件直接使用

文件说明
-------------------

      ./Page.php               分页类核心类文件
      ./demo.php               demo演示文件
 
 ### 分页类详细说明
下载好分页类后，引入分页类，然后实例化分页类

- eg：$page = new Page($total);（其中$total为总页码）
 
然后使用类中的showpage方法获取分页信息并在需要的地方输出就行了

- eg: echo $page->showpage();

 ### 可配置(获得)属性说明

      $page = new Page($total,$pagesize);   2个参数分别是总记录条数和每页显示条数，其中pagesize为可选参数，默认为10
      $page->limit;                         分页查询语句中的limit语句，可直接拼接到查询语句中       
      $page->$pagesize;                     获取每页显示条数
      $page->page;                          获取当前页码
      $page->url;                           获取网页地址
      $page->pagenum;                       获取总页码数
      $page->bothnum;                       获取当前页2边显示页码数量
      $page->bothnum=3;                     设置当前页2边显示页码数量
      $page->showpage();                    分页前端显示代码


如对Page.php文件中代码有优化或拓展，可直接fork提交，我会看情况更新。

  ps:后期我会视情况更新一些分页中的首页和尾页，将分页中的first和last方法中的数字对应修改,或者将上一页下一页去掉等修改
