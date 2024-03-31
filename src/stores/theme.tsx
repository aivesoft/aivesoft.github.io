import { atom, atomFamily } from "recoil";

const localStorageEffect = (key: string) => ({ setSelf, trigger, onSet }: any) => {
  if (typeof window != "undefined") {
    const savedValue = localStorage.getItem(key);

    // if (savedValue !== null) {
    //   setSelf(savedValue);
    // }

    onSet((newValue: any, _: any, isReset: boolean) => {
      isReset
        ? localStorage.removeItem(key)
        : localStorage.setItem(key, newValue);
    });
  }
};

export const themeState = atom({
  key: "theme",
  default: "light",
  effects: [localStorageEffect("theme")]
});
