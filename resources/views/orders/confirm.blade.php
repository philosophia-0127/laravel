<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">苗字</th>
                        <th scope="col">名前</th>
                        <th scope="col">メール</th>
                        <th scope="col">性別</th>
                        <th scope="col">年齢</th>
                        <th scope="col">お問い合わせ内容</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->gender }}</td>
                        <td>{{ $contact->age }}</td>
                        <td>{!! nl2br(e($contact->contact)) !!}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('orders.finish') }}" class="btn btn-primary">送信</a>

        </div>
    </div>
</x-layout>
