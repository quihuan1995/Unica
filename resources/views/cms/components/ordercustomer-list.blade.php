
                        <div class="card-body" id="customerdata" >
                            @foreach ($customers as $item)
                            {{-- <div class="form-group">
                                <label style="font-weight: bolder">Họ và tên</label>
                                <input style="height: 50%;" type="text" name="full_name" class="form-control" value="{{ $item->full_name }}">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Địa chỉ Email</label>
                                <input style="height: 50%;" type="email" name="email" class="form-control" value="{{ $item->email }}">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Thành phố</label>
                                <input style="height: 50%;" type="text" name="city" class="form-control" value="{{ json_decode($item->address)->city }}">
                                <label style="font-weight: bolder" class="mt-2">Địa chỉ nhà</label>
                                <input style="height: 50%;" type="text" name="streetAddress" class="form-control" value="{{ json_decode($item->address)->streetAddress }}">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Số điện thoại</label>
                                <input style="height: 50%;" type="number" name="phone" class="form-control" value="{{ $item->phone }}">
                            </div>
                            <div class="form-group">
                                <label>Payment method</label>
                                <select class="form-control" name="payment_method">
                                    <option >{{ $item->paymment_method }}</option>
                                </select>
                            </div> --}}
                             @endforeach
                        </div>



