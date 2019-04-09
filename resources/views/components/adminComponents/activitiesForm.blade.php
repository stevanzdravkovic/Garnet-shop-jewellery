
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <div class="cart-table-warp">
                        <br/><br/>
                        <table align="center" border="10">
                            <thead>
                            <tr>
                                <th  class="product-th">id</th>

                                <th  class="product-th">created at</th>

                                <th class="product-th">ip</th>

                                <th  class="product-th">route</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($podaci as $p)

                                <tr>

                                    <td class="product-th">
                                        {{$p->id}}

                                    </td>


                                    <td class="product-th">
                                        {{$p->created_at}}

                                    </td>


                                    <td class="product-th">
                                        {{$p->ip}}

                                    </td>


                                    <td class="product-th">
                                        {{$p->route}}

                                    </td>


                            @endforeach




                            </tbody>

                        </table>

<div align="center"> {{ $podaci->links() }}</div>

                        <br/><br/>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>