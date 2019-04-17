
class Test {
  private command: any;
  constructor(c: any) {
    this.command = c
    this.init()
  }
  init() {
    console.log(this.command)
  }
}
