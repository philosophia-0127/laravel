<x-layout>

    <form method="GET" action="">
        氏名：
        <input type="text" name="username">

        <input type="checkbox" name="sports[0]" value="相撲">相撲
        <input type="checkbox" name="sports[1]" value="弓道">弓道
        <input type="checkbox" name="sports[2]" value="カヌー">カヌー

        <input type="submit" value="送信">
    </form>

</x-layout>
