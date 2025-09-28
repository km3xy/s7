随一流程控制复选


新方法清空后复选单点码，1到35，可执行另一流程复选
上期码自动选中，复选上期码，留意重胆码，2025最新版9月核心方法，随一重胆流程复选版，清空后单点1到35可执行另一流程复选



📌 解读：

1. 起点是 输入号码。


2. 系统依次进入：初始化号码池 → 设置模式 → 抽取号码 → 合并号码集。


3. 进入关键判断：是否有重复。

有 → 输出结果；

无 → 条件不成立。



4. 两条路径最终都能进入 一键复制。


5. 复制完成后回到终点。



// ======================
    // 随一模式选号逻辑
    // ======================
    echo "<br>随一模式<br>";
    if ($randomMode == 1) {
        // 随机决定取 5 或 6 个号码
        $pickCount = mt_rand(5, 6);  
        
        // 从整个号码池（1-35）里再随机取出额外号码
        $extra = array_rand(array_flip($randomPool), $pickCount);
        
        // 合并 “已选号码的随机取值” + “额外号码”
        $merged = array_merge($pickedFromSelected, $extra);
        sort($merged);

        // 🔍 判断是否存在重复号码
        if (count($merged) != count(array_unique($merged))) {
            // 有重复 → 输出最终选号结果
            echo "<p class='final-result'>+" . implodeWithRandomSeps($merged) . "</p>";
        } else {
            // 没有重复 → 输出条件不成立
            echo "<p>条件不成立</p>";
        }
    }



