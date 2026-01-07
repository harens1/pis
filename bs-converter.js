// Simple Gregorian -> Bikram Sambat (BS) converter (approximate)
// Provides `gregorianToBs(yyyy-mm-dd)` returning a BS date string with Nepali digits: २०८०-०१-०१
// Note: This implementation is approximate and works well for typical office use around recent years.

(function(global){
    const nepDigits = ['०','१','२','३','४','५','६','७','८','९'];

    function toNepaliDigits(num){
        return String(num).split('').map(ch => {
            if (ch >= '0' && ch <= '9') return nepDigits[Number(ch)];
            return ch;
        }).join('');
    }

    function pad2(n){ return n < 10 ? '0' + n : String(n); }

    // Approximate conversion: assumes BS new year falls on April 14.
    // This gives correct BS year and a reasonable month/day mapping for many dates.
    function gregorianToBs(gdate){
        if(!gdate) return '';
        // accept Date object or yyyy-mm-dd string
        let d;
        if (gdate instanceof Date) d = new Date(gdate.getFullYear(), gdate.getMonth(), gdate.getDate());
        else {
            const parts = gdate.split('-');
            if(parts.length < 3) return '';
            d = new Date(parseInt(parts[0],10), parseInt(parts[1],10)-1, parseInt(parts[2],10));
        }

        const adY = d.getFullYear();
        const adM = d.getMonth() + 1; //1-12
        const adD = d.getDate();

        // Determine BS year
        let bsY = adY + ( (adM > 4) || (adM === 4 && adD >= 14) ? 57 : 56 );

        // Rough offset: compute days since BS new year (assume Apr 14)
        const newYearThis = new Date(adY, 3, 14); // April is month 3
        let dayOffset = Math.floor((d - newYearThis) / (24*60*60*1000));
        if (dayOffset < 0) {
            // date is before Apr 14 -> use previous BS year new year (Apr 14 of previous AD year)
            const newYearPrev = new Date(adY-1, 3, 14);
            dayOffset = Math.floor((d - newYearPrev) / (24*60*60*1000));
        }

        // Approximate BS month lengths (common pattern; actual months vary by year)
        const bsMonthDays = [30,32,31,32,31,30,30,30,29,30,29,31];

        // Determine month and day by walking months from Baisakh(1)
        let m = 0; // index 0 => Baisakh
        let remaining = dayOffset;
        while (remaining >= bsMonthDays[m]){
            remaining -= bsMonthDays[m];
            m = (m + 1) % 12;
        }

        const bsMonth = m + 1; // 1-12
        const bsDay = remaining + 1;

        // Format with Nepali digits
        const bsYearStr = toNepaliDigits(bsY);
        const bsMonthStr = toNepaliDigits(pad2(bsMonth));
        const bsDayStr = toNepaliDigits(pad2(bsDay));

        return `${bsYearStr}-${bsMonthStr}-${bsDayStr}`;
    }

    // Expose functions
    global.bsConverter = {
        gregorianToBs,
        toNepaliDigits
    };

})(window);
