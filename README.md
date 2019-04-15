# WWW
WebSRDP
>此项目用于一个学习平台，目前主要是教程页面

## test.html
这个网页用于输出教程的页面，后台由ReadChapter.php、Readtest.php两个文件负责。

### ReadChapter.php
负责读取章节内容，内容放在Chapter/Chapter#/Info.txt。要更新章节内容，直接更新该txt文件（路径中的#为数字，代表章节号）。
约定的格式是标题和文本用#间隔，然后开头和结尾都用#围住，#要单独成行。

### Readtest.php
负责读取题目和答案。这里的题目是选择题。接下来考虑支持填空题。题目以#包裹；选项以$包裹；答案以@包裹；上述三个符号单独成行。
