function calculate(){

  // 1. init & validate
  const num = input.get('fraction_number_num').integer().raw();
  const denom = input.get('fraction_number_denom').natural().raw();
  if(!input.valid()) return;

  // 2. calculate
  const frac = math.fraction(num, denom);

  // 3. output
  Fractions.outputMixed(frac, 'number');

}