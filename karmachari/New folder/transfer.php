<?php
$title = "सरुवा";
include 'header.php';
?>

<div class="container" style="max-width: 800px; margin: 20px auto; background: white; padding: 20px; border-radius: 10px;">
    <h1>सरुवा दर्ता</h1>
    <form method="POST">
        <div style="margin-bottom: 15px;">
            <label for="employee_no"><strong>क.सं.नं.:</strong></label>
            <input type="text" id="employee_no" name="employee_no" placeholder="कर्मचारी नम्बर" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="employee_name"><strong>कर्मचारी नाम:</strong></label>
            <input type="text" id="employee_name" name="employee_name" placeholder="नाम" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="current_position"><strong>वर्तमान पद:</strong></label>
            <input type="text" id="current_position" name="current_position" placeholder="वर्तमान पद" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="transfer_from"><strong>सरुवा गरिने स्थान:</strong></label>
            <input type="text" id="transfer_from" name="transfer_from" placeholder="वर्तमान स्थान" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="transfer_to"><strong>सरुवा हुने स्थान:</strong></label>
            <input type="text" id="transfer_to" name="transfer_to" placeholder="नयाँ स्थान" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="transfer_date"><strong>सरुवा मिति:</strong></label>
            <input type="date" id="transfer_date" name="transfer_date" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="remarks"><strong>टिप्पणी:</strong></label>
            <textarea id="remarks" name="remarks" rows="4" placeholder="अतिरिक्त टिप्पणी (यदि कुनै हो)" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-top: 5px;"></textarea>
        </div>
        <button type="submit" class="btn primary" style="width: 100%;">दर्ता गर्नुहोस्</button>
    </form>
</div>

<?php include 'footer.php'; ?>
