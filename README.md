# finance-sdk
车云金融SDK PHP版本

php项目 如果没有 composer管理包文件， 想要使用 composer require lolfans/finance-sdk 安装sdk并使用 ,需要先在项目根目录执行
1，composer init 录入基本信息。（前提是该环境安装了composer）
2，再执行composer require lolfans/finance-sdk 命令
3，再在需要使用该SDK的页面引用 require dirname(__FILE__)."/vendor/autoload.php"；
4，use FinanceSdk\FinanceCommonClient;

