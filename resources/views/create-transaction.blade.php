<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION PAGE</title>
</head>
<body>
    <h1> TRANSACTION PAGE</h1>
    <form action="{{ route('storeTransaction') }}" method="POST">
        @method('POST')
        @csrf 
        <label for="transaction_title">Transaction Title: </label>
        <input type="text" id="transaction_title" name="transaction_title" required><br>
        
        <label for="description">Description </label>
        <input type="text" id="description" name="description" required><br>
        
        <label for="status">Status: </label>
            <select type="select" id="status" name="status" required><br>
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select><br>
        
        <label for="total_amount">Total Amount: </label>
        <input type="number" id="total_amount" name="total_amount" required><br>
        
        <label for="transaction_number">Transaction Number </label>
        <input type="text" id="transaction_number" name="transaction_number" required><br>
        <button type="'submit">Create</button> 
    </form>
    
    <form action="{{ route('getAllTransactions') }}" method="GET">
        <button type="submit">Back</button>
    </form>
</body>
</html>